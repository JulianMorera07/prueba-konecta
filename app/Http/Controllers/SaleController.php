<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use App\Http\Requests\Sales\StoreSaleRequest;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('sales.index', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Sales\StoreSaleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSaleRequest $request)
    {
        $stock = Product::where('id', $request->toArray()['product_id'])->get();
        if ($stock->toArray()[0]['stock'] > $request->toArray()['quantity']){
            Product::where('id', $request->toArray()['product_id'])->update(array('stock' => $stock->toArray()[0]['stock'] - $request->toArray()['quantity']));
            Sale::create($request->toArray());
            alert()->success('Vendido', 'Se proceso el pedido correctamente');
            return to_route('sales.index');
        } else {
            alert()->error('Error', 'El número no puede ser mayor a la cantidad que se tiene en el inventario');
            return to_route('sales.index');
        }
    }
}
