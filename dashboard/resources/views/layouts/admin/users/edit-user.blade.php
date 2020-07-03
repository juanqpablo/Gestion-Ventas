<div class="modal fade" id="updateModal{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Material form register -->
          <div class="card">
              <!--Card content-->
              <div class="card-body px-lg-5 pt-0">
                <br>
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Editar Usuario</h1>
                  </div>
                  <form class="user" method="post" action="{{action('UserController@update', $user->id)}}">
                    @csrf
                    <div class="form-group row">
                      <div class="col-sm-3 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name="CodUser"value="{{$user->cod}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name="FirstName" value="{{$user->name}}">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" name="LastName" value="{{$user->apellido}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-8">
                        <input type="text" class="form-control form-control-user" name="Address" value="{{$user->direccion}}">
                      </div>
                      <div class="col-sm-4">
                        <input type="text" class="form-control form-control-user" name="Comuna" value="{{$user->comuna}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-8">
                        <input type="email" class="form-control form-control-user" name="InputEmail" value="{{$user->email}}">
                      </div>
                      <div class="col-sm-4">
                        <input type="text" class="form-control form-control-user" name="Phone" value="{{$user->fono}}">
                      </div>
                    </div>
                    <div class="form-group col-sm-6 ">
                        <select class="custom-select" required name="TypeUser">
                          <option value="" > Tipo de usuario</option>
                          <option value="1" @if($user->rol=="administrador")
                                              selected
                                            @endif
                            > Administrador</option>
                          <option value="2"@if($user->rol=="vendedor")
                                              selected
                                            @endif
                          > Vendedor</option>
                        </select>
                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Editar Usuario
                    </button>
                    <hr>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
</div>
