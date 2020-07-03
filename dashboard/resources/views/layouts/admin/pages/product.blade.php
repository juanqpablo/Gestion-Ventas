@extends('master.admin.index')

@section('titulo','Productos')

@section('contenido')

  <div class="container-fluid ">
      <!-- Content Row -->
     <div class="row">
        <div class="col-xl">
          <div class="bd-example bd-example-tabs">
            <div class="card">
              <div class="card-body profile-head ">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="product-tab" data-toggle="tab" href="#product" role="tab" aria-controls="product" aria-selected="true">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="false">Nuevo</a>
                  </li>
                </ul>
                <br>
                <div class="tab-content mb" id="myTabContent">
                  <div class="tab-pane fade show active" id="product" role="tabpanel" aria-labelledby="product-tab">
                      @include("layouts.admin.products.list-products")
                  </div>
                  <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
                      @include("layouts.admin.products.enter-products")
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  <!-- End of row Content -->
  </div>



@endsection
