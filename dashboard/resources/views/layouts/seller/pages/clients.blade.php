@extends('master.seller.index')

@section('titulo','Pedidos')

@section('contenido')
<div class="container-fluid">
      <!-- Content Row -->
      <div class="row">
         <div class="col-xl-11">
           <div class="bd-example bd-example-tabs">
             <div class="card">
               <div class="card-body">
                 <ul class="nav nav-tabs" id="myTab" role="tablist">
                   <li class="nav-item">
                     <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Lista Clientes</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Nuevo Cliente</a>
                   </li>
                 </ul>
                 <br>
                 <div class="tab-content" id="myTabContent">
                   <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                       @include("layouts.seller.Client.list-client")
                   </div>
                   <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                       @include("layouts.seller.Client.registerClient")
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>

  </div>

@endsection
