<!-- Hey Por favor traeme la template de base-->
@extends('./master.seller.index')

<!-- Titulo de la pestaña -->
@section('titulo','Perfil')

@section('contenido')
  <div class="container emp-profile">
              <form method="post">
                  <div class="row">
                      <div class="col-md-4">
                          <div class="profile-img">
                            <center> <img src="https://image.freepik.com/vector-gratis/perfil-avatar-hombre-icono-redondo_24640-14046.jpg" style="margin-bottom:10px;" width="200px" class="rounded-circle "></center>
                             <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                                <label class="custom-file-label" for="customFileLang">Subir una Imagen</label>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="profile-head">
                              <h5>
                                @auth
                                  {{auth()->user()->name }} {{auth()->user()->apellido}}
                                @endauth
                              </h5>
                              <h6>
                                @auth
                                  {{auth()->user()->rol}}
                                @endauth
                              </h6>
                                      <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                              <ul class="nav nav-tabs" id="myTab" role="tablist">
                                  <li class="nav-item">
                                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">¿Quien Soy?</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-md-2">
                          <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Editar perfil"/>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4">
                          <div class="profile-work">
                              <p>Zonas a cargo: </p>
                              <a href="">Temuco</a><br/>
                              <a href="">Labranza </a><br/>
                              <a href="">Imperial</a>

                          </div>
                      </div>
                      <div class="col-md-8">
                          <div class="tab-content profile-tab" id="myTabContent">
                              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label>Cod_vendedor</label>
                                              </div>
                                              <div class="col-md-6">
                                                  <p>{{auth()->user()->cod}}</p>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label>Nombre</label>
                                              </div>
                                              <div class="col-md-6">
                                                  <p>{{auth()->user()->name}}</p>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label>Apellidos</label>
                                              </div>
                                              <div class="col-md-6">
                                                  <p>{{auth()->user()->apellido}}</p>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label>Comuna</label>
                                              </div>
                                              <div class="col-md-6">
                                                  <p>{{auth()->user()->comuna}}</p>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label>Dirección</label>
                                              </div>
                                              <div class="col-md-6">
                                                  <p>{{auth()->user()->direccion}}</p>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label>Fono</label>
                                              </div>
                                              <div class="col-md-6">
                                                  <p>{{auth()->user()->fono}}</p>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label>Correo</label>
                                              </div>
                                              <div class="col-md-6">
                                                  <p>{{auth()->user()->email}}</p>
                                              </div>
                                          </div>
                              </div>
                              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label>Experience</label>
                                              </div>
                                              <div class="col-md-6">
                                                  <p>Expert</p>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label>Hourly Rate</label>
                                              </div>
                                              <div class="col-md-6">
                                                  <p>10$/hr</p>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label>Total Projects</label>
                                              </div>
                                              <div class="col-md-6">
                                                  <p>230</p>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label>English Level</label>
                                              </div>
                                              <div class="col-md-6">
                                                  <p>Expert</p>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label>Availability</label>
                                              </div>
                                              <div class="col-md-6">
                                                  <p>6 months</p>
                                              </div>
                                          </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <label>Your Bio</label><br/>
                                          <p>Your detail description</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </form>
          </div>

<!-- /.container-fluid -->

@endsection
