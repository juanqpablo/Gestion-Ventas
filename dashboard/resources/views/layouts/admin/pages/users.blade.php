<!-- Hey Por favor traeme la template de base-->
@extends('./master.admin.index')

<!-- Titulo de la pestaña -->
@section('titulo','Usuarios')

@section('contenido')
  <!-- Begin Page Content -->
<div class="container-fluid ">
    <!-- Content Row -->
   <div class="row">
      <div class="col-xl-8">
        <div class="bd-example bd-example-tabs">
          <div class="card">
            <div class="card-body profile-head ">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Usuarios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Crear</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </li>
              </ul>
              <br>
              <div class="tab-content mb" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    @include("layouts.admin.users.list-user")
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    @include("layouts.admin.users.register")
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    ...
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4">
        <div class="bd-example bd-example-tabs">
          <div class="card profile-head">
            <div class="card-body">
              <h4>Usuarios Recientes</h4>
              <div class="dropdown-divider"></div>
              <br>
                @include("layouts.admin.users.recent")
            </div>
        </div>
      </div>
  </div>
  <!-- End of row Content -->


</div>
<!-- /.container-fluid -->



@endsection
