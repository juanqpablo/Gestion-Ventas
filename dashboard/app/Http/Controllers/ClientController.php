<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Usuario;
use AuthenticatesUsers;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function MostrarClientes()
    {
        //
        $clients=Cliente::all();
        if (\Auth::user()->rol == 'administrador') {
            return view('layouts/admin/pages/clients')->with('clients',$clients);
        }
        else {
            return view('layouts/seller/pages/client-seller')->with('clients',$clients);
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
      if($request->filled('InputidClient') && \Auth::user()!=null){
       $usuario=Usuario::where('email', '=', \Auth::user()->email)->firstOrFail();
       $client = new \App\Cliente;
       $client->id_client = $request->get('InputidClient');
       $client->cod_vendedor = $usuario->cod;
       $client->nombre = $request->get('InputFirstNameClient');
       $client->apellido = $request->get('InputLastNameClient');
       $client->comuna = $request->get('SelectComuna');
       $client->direccion = $request->get('InputAddressClient');
       $client->fono = $request->get('InputPhoneClient');
       $client->email = $request->get('InputEmailClient');
       $client->save();
      }
      return redirect('client-seller');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPed(Request $req)
    {
        //
        $client=Cliente::where('id',$req->get('InputidClient'))->firstOrFail();
        return view('layouts/admin/pages/orders')->with('cliente',$client);
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
        $clients=Cliente::where('id',$id)->firstOrFail();
        $clients->id_client=$request->get('Rut');
        $clients->nombre = $request->get('FirstName');
        $clients->apellido = $request->get('LastName');
        $clients->direccion = $request->get('Address');
        $clients->comuna=$request->get('Comuna');
        $clients->email=$request->get('InputEmail');
        $clients->fono=$request->get('Phone');
        $clients->save();
        if (\Auth::user()->rol == 'administrador') {
          return redirect('client')->with('clients',$clients);
        }
        else {
          return redirect('client-seller')->with('clients',$clients);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $client=Cliente::where('id', '=', $id)->firstOrFail();
      $client->delete();
      if (\Auth::user()->rol == 'administrador') {
        return redirect('client')->with('clients',$client);
      }
      else {
        return redirect('client-seller');
      }
    }
}
