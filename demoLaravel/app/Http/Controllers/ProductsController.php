<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Routing\Controller as BaseController;

class ProductsController extends BaseController
{
    public function show($id)
    {
        $product = Products::findOrFail($id);
        return view('/showProducts', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);
        $product->update([
            'name'=> $request->name,
            'color'=> $request->color,
            'weight'=> $request->weight,
            'price'=> $request->price,
        ]);
        return redirect('/')->with('success', );
    }



}
