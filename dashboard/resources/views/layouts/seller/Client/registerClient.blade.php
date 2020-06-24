<!-- Material form register -->
<div class="card">
  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">
    <br>
    <div class="p-5">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Nuevo Cliente</h1>
      </div>
      <form class="order">
        <div class="form-group row needs-validation" novalidate>
          <div class="col-sm-8 mb-3 mb-sm-0">
            <input type="text" class="form-control form-control-order" id="InputidClient" placeholder="Rut Cliente">
          </div>
        </div>
          <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="text" class="form-control form-control-order " id="InputFirstNameClient" placeholder="Nombre">
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="text" class="form-control form-control-order " id="InputLastNameClient" placeholder="Apellido">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-7 mb-3 mb-sm-0">
              <input type="email" class="form-control form-control-order" id="InputAddressClient" placeholder="Dirección">
            </div>
            <div class="col-sm-5 mb-3 mb-sm-0">
              <select class="form-control" id="SelectComuna">
                <option selected>Comuna</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-4 mb-3 mb-sm-0">
              <input type="text" class="form-control form-control-order" id="InputPhoneClient"placeholder="Teléfono">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-12 mb-3 mb-sm-0">
              <input type="email" class="form-control form-control-order" id="InputEmailClient" placeholder="Email">
            </div>
          </div>

          <a href="#" class="btn btn-primary btn-order btn-block">
            Registrar Cliente
          </a>
      </form>
    </div>
  </div>
</div>
