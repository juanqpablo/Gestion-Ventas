<!-- Hey Por favor traeme la template de base-->
@extends('./master.admin.index')

@section('titulo','Clientes')

@section('contenido')
  <!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
   <div class="row">
         <!-- Area Client -->
         <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 col-lg-12">
           <div class="card shadow mb-4">
             <!-- Card Header - Dropdown -->
             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <h6 class="m-0 font-weight-bold text-primary">Lista de Clientes</h6>
             </div>
             <!-- Card Body -->
             @include('layouts/admin/clients/list-client')
           </div>
         </div>

    </div>
</div>
@endsection
