<?php

namespace App\Http\Controllers;

use App\Models\Maker;
use Illuminate\Http\Request;
use DB;

class MakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $maker = Maker::orWhere('name', 'LIKE', "%{$request->kwd}%")
        ->orderBy('id','DESC')
        ->paginate(5);
        return view('maker.index',compact('maker'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maker.createupdate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        Maker::create($request->all());
        return redirect()->route('maker.index')
                        ->with('success','Maker created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maker  $maker
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maker = Maker::find($id);
        return view('maker.show',compact('maker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maker  $maker
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maker = Maker::find($id);
        return view('maker.createupdate', compact('maker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Maker  $maker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $maker = Maker::find($id);
        $maker->update($request->all());
        return redirect()->route('maker.index')
                        ->with('success','Maker updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maker  $maker
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sum = 0;
        $total_brand = DB::table('brands')->where('maker_id', $id)->count();
        $sum += $total_brand;
        
        if($sum == 0) {
            DB::table("makers")->where('id', $id)->delete();
            return redirect()->route('maker.index')->with('success', 'Maker deleted successfully');
        } else {
            return redirect()->route('maker.index')->with('danger', 'Maker cannot deleted, Because data has been used');
        }
        // DB::table("makers")->where('id', $id)->delete();
        //     return redirect()->route('maker.index')->with('success', 'Maker deleted successfully');
    }
}
