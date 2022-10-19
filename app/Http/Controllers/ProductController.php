<?php

namespace App\Http\Controllers;

use App\Http\Requests\Products\StoreProductsRequest;
use App\Models\Product;
use App\Http\Requests\Products\UpdateProductsRequest;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): view
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Products\StoreProductsRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreProductsRequest $request)
    {
        Product::create($request->toArray());
        alert()->success('Correctamente', 'Se creo el producto');
        return to_route('products.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\products\UpdateProductsRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateProductsRequest $request, Product $product)
    {
        $product->update($request->validated());
        alert()->success('Correctamente', 'Se edito el producto');
        return to_route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();
        alert()->success('Correctamente', 'Se elimino el producto');
        return to_route('products.index');
    }
}
