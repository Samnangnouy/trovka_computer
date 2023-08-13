<?php

namespace App\Http\Controllers;

use App\Models\ProductUse;
use Illuminate\Http\Request;

class ProductUseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $productUsed = ProductUse::orWhere('name', 'LIKE', "%{$request->kwd}%")
        ->orderBy('id','DESC')
        ->paginate(5);
        return view('products.used.index',compact('productUsed'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.used.createupdate');
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
        ProductUse::create($request->all());
        return redirect()->route('productUsed.index')
                        ->with('success','Product Used created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductUse  $productUse
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productUsed = ProductUse::find($id);
        return view('products.used.show',compact('productUsed'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductUse  $productUse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productUsed = ProductUse::find($id);
        return view('products.used.createupdate', compact('productUsed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductUse  $productUse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $productUsed = ProductUse::find($id);
        $productUsed->update($request->all());
        return redirect()->route('productUsed.index')
                        ->with('success','Product Used updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductUse  $productUse
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productUsed=ProductUse::find($id);
        $productUsed->delete();
        return redirect()->route('productUsed.index')
                        ->with('success', 'Product Used deleted successfully');

    }
}
