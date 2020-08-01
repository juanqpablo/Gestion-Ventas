@extends('master.admin.index')

@section('titulo','Pedidos')

@section('contenido')
<div class="container-fluid">
      <!-- Content Row -->
      <div class="row">
         <div class="col-xl-11">
           <div class="bd-example bd-example-tabs">
             <div class="card">
               <div class="card-body profile-head">
                 <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item">
                       <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Lista Pedidos</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" id="profile-tab" data-toggle="tab" href="#add" role="tab" aria-controls="profile" aria-selected="false">Nuevo Pedido</a>
                     </li>
                 </ul>
                 <br>
                 <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                         @include("layouts.admin.order.list-order")
                     </div>
                     <div class="tab-pane fade " id="add" role="tabpanel" aria-labelledby="register-tab">
                         @include("layouts.admin.order.registerOrder")
                     </div>
                 </div>
               </div>
             </div>
           </div>
         </div>

  </div>

@endsection
