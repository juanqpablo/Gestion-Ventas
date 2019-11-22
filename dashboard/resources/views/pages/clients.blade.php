<!-- Hey Por favor traeme la template de base-->
@extends('./master.index')

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
               <div class="table-responsive-lg table-responsive-md table-responsive-sm  table-responsive-xs">
                 <table class="table table-hover">
                     <thead class="thead-dark">
                       <tr>
                         <th scope="col">ID</th>
                         <th scope="col">Nombre</th>
                         <th scope="col">Apellido</th>
                         <th scope="col">Comuna</th>
                         <th scope="col">Dirección</th>
                         <th scope="col">Fono</th>
                         <th scope="col">Correo</th>
                         <th scope="col">Editar</th>
                         <th scope="col">Eliminar</th>
                       </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <th scope="row">1</th>
                         <td>Juan</td>
                         <td>Quezada</td>
                         <td>Temuco</td>
                         <td>Villa El Trebol labranza</td>
                         <td>36659352</td>
                         <td>Vil@gmail.com</td>
                         <td>
                           <button class="btn btn-primary btn-sm"><i class="far fa-clipboard fa-md"></i> Editar</button>
                         </td>

                         <td>
                           <button class="btn btn-danger btn-sm"><i class="fas fa-user-times fa-md"></i> Eliminar</button>
                         </td>
                       </tr>
                       <tr>
                         <th scope="row">1</th>
                         <td>Juan</td>
                         <td>Quezada</td>
                         <td>Temuco</td>
                         <td>Villa El Trebol labranza</td>
                         <td>48659352</td>
                         <td>juan@gmail.com</td>
                         <td>
                           <button class="btn btn-primary btn-sm"><i class="far fa-clipboard fa-md"></i> Editar</button>
                         </td>

                         <td>
                           <button class="btn btn-danger btn-sm"><i class="fas fa-user-times fa-md"></i> Eliminar</button>
                         </td>
                       </tr>
                       <tr>
                         <th scope="row">3</th>
                         <td>Larry</td>
                         <td>the Bird</td>
                         <td>@twitter</td>
                         <td>Vendedor</td>
                       </tr>
                     </tbody>
                 </table>
               </div>



               <div class="chart-area">
                 <canvas id="myAreaChart">

                 </canvas>
               </div>
             </div>
           </div>
         </div>

    </div>
</div>
@endsection
