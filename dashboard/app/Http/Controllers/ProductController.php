<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use AuthenticatesUsers;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function MostrarProductos()
    {
        //
        $products=Producto::all();
        if (\Auth::user()->rol == 'administrador') {
            return view('layouts/admin/pages/product')->with('products',$products);
        }
        else {
            return view('layouts/seller/pages/product')->with('products',$products);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $product = new \App\Producto;
         $product->cod_product = $request->get('inputCodP');
         $product->nombre = $request->get('inputNombre');
         if($request->get('TypeProd')==1){
           $product->categoria ='Alimento';
         }
         else{
           $user->rol='Articulo';
         }
         $product->peso = $request->get('inputPeso');
         $product->precio = $request->get('inputPrecio');
         $product->stock = $request->get('inputStock');
         $product->save();
         return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id="1")
    {
        //
        $product=Producto::where('id_prod',$id)->firstOrFail();
        $product->cod_product=$request->get('inputCodP');
        $product->nombre = $request->get('inputNombre');
        if($request->get('TypeProd')!=null && $request->get('TypeProd')=='1'){
          $product->categoria ='Alimento';
        }
        else{
          $user->rol='Articulo';
        }
        $product->peso = $request->get('inputPeso');
        $product->precio=$request->get('inputPrecio');
        $product->stock=$request->get('inputStock');
        $product->save();
        return redirect('product')->with('products',$product);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product=Producto::where('id_prod', '=', $id)->firstOrFail();
        $product->delete();
        return redirect('product');
    }
}
