<?php

namespace App\Http\Controllers;

use App\Models\ProductColor;
use Illuminate\Http\Request;

class ProductColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $productColor = ProductColor::orWhere('name', 'LIKE', "%{$request->kwd}%")
        ->orderBy('id','DESC')
        ->paginate(5);
        return view('products.color.index',compact('productColor'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.color.createupdate');
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
        ProductColor::create($request->all());
        return redirect()->route('productColor.index')
                        ->with('success','Product Color created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductColor  $productColor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productColor = ProductColor::find($id);
        return view('products.color.show',compact('productColor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductColor  $productColor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productColor = ProductColor::find($id);
        return view('products.color.createupdate', compact('productColor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductColor  $productColor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $productColor = ProductColor::find($id);
        $productColor->update($request->all());
        return redirect()->route('productColor.index')
                        ->with('success','Product Color updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductColor  $productColor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productColor=ProductColor::find($id);
        $productColor->delete();
        return redirect()->route('productColor.index')
                        ->with('success', 'Product color deleted successfully');

    }
}
