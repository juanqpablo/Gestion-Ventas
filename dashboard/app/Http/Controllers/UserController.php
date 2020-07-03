<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
//use App\Http\Requests\UserFormRequest;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function MostarUsuarios()
    {
        $users=Usuario::all();
        return view('layouts/admin/pages/users')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('users');
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
        if($request->filled('CodUser')){
         $user = new \App\Usuario;
         $user->cod = $request->get('CodUser');
         $user->name = $request->get('FirstName');
         $user->apellido = $request->get('LastName');
         $user->comuna = $request->get('Comuna');
         $user->direccion = $request->get('Address');
         $user->fono = $request->get('Phone');
         $user->email = $request->get('InputEmail');
         if($request->get('TypeUser')==1){
           $user->rol ='administrador';
         }
         else{
           $user->rol='vendedor';
         }
         $user->password = bcrypt($request->get('InputPassword'));
         $user->save();
        }
        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {    //
        //$usuario=Usuario::where('id', '=', $id)->firstOrFail();
        //return view('layouts/admin/users/list-user')->with('usuario',$usuario);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id='1')
    {
        // $usuario=Usuario::where('id', '=', $id)->firstOrFail();
        // return view('layouts/admin/pages/users')->with('usuario',$usuario);
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
        $usuario=Usuario::where('id', '=', $id)->firstOrFail();
        $usuario->cod=$request->get('CodUser');
        $usuario->name=$request->get('FirstName');
        $usuario->apellido=$request->get('LastName');
        $usuario->direccion=$request->get('Address');
        $usuario->comuna=$request->get('Comuna');
        $usuario->email=$request->get('InputEmail');
        $usuario->fono=$request->get('Phone');
        if($request->get('TypeUser')!=null && $request->get('TypeUser')=='1'){
          $usuario->rol='administrador';
        }
        else {
          $usuario->rol='vendedor';
        }
        $usuario->save();
        return redirect('users')->with('users',$usuario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $usuario=Usuario::where('id', '=', $id)->firstOrFail();
      $usuario->delete();
      return redirect('users');
    }
}
