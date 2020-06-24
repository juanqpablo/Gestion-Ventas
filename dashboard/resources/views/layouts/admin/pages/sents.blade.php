@extends('master.admin.index')

@section('titulo','Productos')

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
               <h6 class="m-0 font-weight-bold text-primary">Lista de Envios</h6>
               <div class="dropdown no-arrow">
                 <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                 </a>
                 <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                   <div class="dropdown-header">Dropdown Header:</div>
                   <a class="dropdown-item" href="#">Action</a>
                   <a class="dropdown-item" href="#">Another action</a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="#">Something else here</a>
                 </div>
               </div>
             </div>
             <!-- Card Body -->
             <div class="card-body">
                 <form class="d-none d-sm-inline-block form-inline ml-auto  mw-100 navbar-search mb-2">
                   <div class="input-group">
                     <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
                     <div class="input-group-append">
                       <button class="btn btn-primary" type="button">
                         <i class="fas fa-search fa-sm"></i>
                       </button>
                     </div>
                   </div>
                 </form>
               <div class="table-responsive-lg table-responsive-md table-responsive-sm  table-responsive-xs">
                 <table class="table table-hover">
                   <thead class="thead-dark">
                     <tr>
                       <th scope="col">ID</th>
                       <th scope="col">Numero Orden</th>
                       <th scope="col">Fecha</th>
                       <th scope="col">Estado</th>
                       <th scope="col">Recepcion</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td scope="col">33</td>
                       <td scope="col">4000091</td>
                       <td scope="col">22-11-19</td>
                       <td scope="col">En Camino</td>
                       <td scope="col"><a class="btn btn-primary">Recibido</a></td>
                     </tr>
                   </tbody>
                 </table>
               </div>
             </div>
           </div>
         </div>

       </div>
     </div>
   @endsection
