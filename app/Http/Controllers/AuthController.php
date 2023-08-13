<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('auth/register');
    }

    /**
     * Summary of registerSave
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function registerSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:30'
        ])->validate();


        //Send faild response if request is not valid
        // if ($validator->fails()) {
        //     return response()->json(['error' => $validator->messages()], 200);
        // }

        //Request is valid, create new user
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'Customer'
        ]);

        //User created, return success response for api
        // return response()->json([
        //     'success' => true,
        //     'message' => "User created successfully",
        //     'data' => $user
        // ], Response::HTTP_OK);

        return redirect()->route('login')->with([
            'success' => true,
            'message' => 'User created successfully',
            'data' => $user
        ]);
    }

    /**
     * Summary of login
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function login()
    {
        return view('auth/login');
    }

    /**
     * Summary of loginAction
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:30',
        ])->validate();

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            // Debugging Step 2: Use dd() function to dump and die for immediate inspection
            dd('Login Failed - Email: ' . $request->email . ', Password: ' . $request->password);
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
                'password' => trans('auth.failed.password')
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('admin/dashboard');
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();
  
        $request->session()->invalidate();
  
        return redirect('/');
    }

    public function profile(){
        return View('profile');

    }
   
}