<?php

namespace App\Http\Controllers;

use App\Models\ProductStorage;
use Illuminate\Http\Request;

class ProductStorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $productStorage = ProductStorage::orWhere('name', 'LIKE', "%{$request->kwd}%")
        ->orderBy('id','DESC')
        ->paginate(5);
        return view('products.storage.index',compact('productStorage'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.storage.createupdate');
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
        ProductStorage::create($request->all());
        return redirect()->route('productStorage.index')
                        ->with('success','Product Storage created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductStorage  $productStorage
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productStorage = ProductStorage::find($id);
        return view('products.storage.show',compact('productStorage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductStorage  $productStorage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productStorage = ProductStorage::find($id);
        return view('products.storage.createupdate', compact('productStorage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductStorage  $productStorage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $productStorage = ProductStorage::find($id);
        $productStorage->update($request->all());
        return redirect()->route('productStorage.index')
                        ->with('success','Product Storage updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductStorage  $productStorage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productStorage=ProductStorage::find($id);
        $productStorage->delete();
        return redirect()->route('productStorage.index')
                        ->with('success', 'Product Storage deleted successfully');

    }
}
