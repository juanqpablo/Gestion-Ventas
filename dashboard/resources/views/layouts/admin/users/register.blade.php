<!-- Material form register -->
  <div class="card">
      <!--Card content-->
      <div class="card-body px-lg-5 pt-0">
        <br>
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Nuevo Usuario</h1>
          </div>
          <form class="user">
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nombres">
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Apellidos">
              </div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Dirección Email">
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
              </div>
              <div class="col-sm-6">
                <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
              </div>
            </div>
            <div class="form-group col-sm-6 ">
                <select class="custom-select" required>
                  <option value=""> Tipo de usuario</option>
                  <option value="1"> Administrador</option>
                  <option value="2"> Vendedores</option>
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>

            <a href="login.html" class="btn btn-primary btn-user btn-block">
              Registrar Usuario
            </a>
            <hr>
          </form>
          <hr>
    </div>
 </div>
</div>
