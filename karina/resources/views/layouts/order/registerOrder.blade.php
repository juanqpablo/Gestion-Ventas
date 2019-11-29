<!-- Material form register -->
<div class="card">
  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">
    <br>
    <div class="p-5">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Nuevo Pedido</h1>
      </div>
      <form class="order">
        <div class="form-group row needs-validation" novalidate>
          <div class="col-sm-8 mb-3 mb-sm-0">
            <input type="text" class="form-control form-control-order" id="InputidClient" placeholder="Rut Cliente">
          </div>
        </div>
        <fieldset disabled>
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
              <input type="text" class="form-control form-control-order" id="InputComunaClient"placeholder="Comuna">
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
          <div class="form-group">
            <div class="col-sm-12 mb-3 mb-sm-0 row">
              <table class="table table-striped table-hover table-sm">
                <thead >
                  <tr>
                    <th class="col-md-6" scope="col">Producto</th>
                    <th class="col-md-3" scope="col">Cantidad</th>
                    <th class="col-md-3" scope="col">SubTotal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <select id="CodProducto" class="form-control custom-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </td>
                    <td>
                      <input type="text" class="form-control " id="CantProd" placeholder="Cantidad">
                    </td>
                    <td>
                      <input type="text" class="form-control" id="Subtotal" placeholder="Subtotal" disabled>
                    </td>
                  </tr>
                </tbody>
              </table>
              <button class="btn btn-info btn-newrow btn-sm">+</button>
              <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>
          </div>

          <a href="#" class="btn btn-primary btn-order btn-block">
            Registrar Pedido
          </a>
        </fieldset>
      </form>
    </div>
  </div>
</div>
