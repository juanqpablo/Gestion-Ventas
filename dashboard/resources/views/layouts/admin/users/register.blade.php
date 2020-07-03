<!-- Material form register -->
  <div class="card">
      <!--Card content-->
      <div class="card-body px-lg-5 pt-0">
        <br>
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Nuevo Usuario</h1>
          </div>
          <form class="user" method="POST" action="{{route('registerUsr')}}">
            @csrf
            <div class="form-group row">
              <div class="col-sm-3 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" name="CodUser" placeholder="Codigo">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" name="FirstName" placeholder="Nombres">
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" name="LastName" placeholder="Apellidos">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-user" name="Address" placeholder="Dirección">
              </div>
              <div class="col-sm-4">
                <input type="text" class="form-control form-control-user" name="Comuna" placeholder="Comuna">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-8">
                <input type="email" class="form-control form-control-user" name="InputEmail" placeholder="Dirección Email">
              </div>
              <div class="col-sm-4">
                <input type="text" class="form-control form-control-user" name="Phone" placeholder="Teléfono">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" class="form-control form-control-user" name="InputPassword" placeholder="Password">
              </div>
              <div class="col-sm-6">
                <input type="password" class="form-control form-control-user" name="RepeatPassword" placeholder="Repeat Password">
              </div>
            </div>
            <div class="form-group col-sm-6 ">
                <select class="custom-select" required name="TypeUser">
                  <option value=""> Tipo de usuario</option>
                  <option value="1"> Administrador</option>
                  <option value="2"> Vendedores</option>
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>

            <button type="submit" class="btn btn-primary btn-user btn-block" data-toggle="modal" data-target="#registerModal">
              Registrar Usuario
            </button>
            <hr>
          </form>
          <hr>
    </div>
 </div>
</div>


<!-- registro Modal-->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Registro Generado Correctamente</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Aceptar</button>
            @csrf
        </form>
      </div>
    </div>
  </div>
</div>
