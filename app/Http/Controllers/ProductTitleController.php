<?php

namespace App\Http\Controllers;

use App\Models\ProductTitle;
use Illuminate\Http\Request;

class ProductTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $productTitle = ProductTitle::orWhere('name', 'LIKE', "%{$request->kwd}%")
        ->orderBy('id','DESC')
        ->paginate(5);
        return view('products.title.index',compact('productTitle'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.title.createupdate');
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
        ProductTitle::create($request->all());
        return redirect()->route('productTitle.index')
                        ->with('success','Product Title created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductTitle  $productTitle
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productTitle = ProductTitle::find($id);
        return view('products.title.show',compact('productTitle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductTitle  $productTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productTitle = ProductTitle::find($id);
        return view('products.title.createupdate', compact('productTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductTitle  $productTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $productTitle = ProductTitle::find($id);
        $productTitle->update($request->all());
        return redirect()->route('productTitle.index')
                        ->with('success','Product Title updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductTitle  $productTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productTitle=ProductTitle::find($id);
        $productTitle->delete();
        return redirect()->route('productTitle.index')
                        ->with('success', 'Product title deleted successfully');

    }
}
