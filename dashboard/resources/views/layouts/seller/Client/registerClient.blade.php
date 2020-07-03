<!-- Material form register -->
<div class="card">
  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">
    <br>
    <div class="p-5">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Nuevo Cliente</h1>
      </div>
      <form class="order" method="POST" action="{{route('registerClient')}}">
        @csrf
        <div class="form-group row needs-validation" novalidate>
          <div class="col-sm-8 mb-3 mb-sm-0">
            <input type="text" class="form-control form-control-order" name="InputidClient" placeholder="Rut Cliente">
          </div>
        </div>
          <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="text" class="form-control form-control-order " name="InputFirstNameClient" placeholder="Nombre">
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="text" class="form-control form-control-order " name="InputLastNameClient" placeholder="Apellido">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-7 mb-3 mb-sm-0">
              <input type="text" class="form-control form-control-order" name="InputAddressClient" placeholder="Dirección">
            </div>
            <div class="col-sm-5 mb-3 mb-sm-0">
              <input type="text" class="form-control form-control-order" name="SelectComuna" placeholder="Comuna">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-4 mb-3 mb-sm-0">
              <input type="text" class="form-control form-control-order" name="InputPhoneClient"placeholder="Teléfono">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-12 mb-3 mb-sm-0">
              <input type="email" class="form-control form-control-order" name="InputEmailClient" placeholder="Email">
            </div>
          </div>

          <button type="submit" class="btn btn-primary btn-order btn-block" data-toggle="modal" data-target="#registerModal">
            Registrar Cliente
          </button>
      </form>
    </div>
  </div>
</div>


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
