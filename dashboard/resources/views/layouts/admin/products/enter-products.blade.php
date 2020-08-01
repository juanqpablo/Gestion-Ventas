<!-- Material form register -->
  <div class="card">
      <!--Card content-->
      <div class="card-body px-lg-5 pt-0">
        <br>
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Nuevo Producto</h1>
          </div>
          <form class="product" method="POST" action="{{route('registerProd')}}">
            @csrf
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" name="inputCodP" placeholder="Codigo">
              </div>
              <div class="col-sm-6 ">
                  <select class="custom-select" required name="TypeProd">
                    <option value=""> Categoria</option>
                    <option value="1"> Alimento</option>
                    <option value="2"> Articulo</option>
                  </select>
                  <div class="invalid-feedback">Example invalid custom select feedback</div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-control-user" name="inputNombre" placeholder="Descripcion">
            </div>
            <div class="form-group row">
              <div class="col-sm-4 mb-3 mb-sm-0">
                <input type="number" class="form-control form-control-user" name="inputPeso" placeholder="Peso">
              </div>
              <div class="col-sm-4">
                <input type="number" class="form-control form-control-user" name="inputPrecio" placeholder="Precio">
              </div>
              <div class="col-sm-4">
                <input type="number" class="form-control form-control-user" name="inputStock" placeholder="Stock">
              </div>
            </div>

            <button type="submit" class="btn btn-primary btn-user btn-block">
              Ingresar Producto
            </button>
            <hr>
          </form>
          <hr>
    </div>
 </div>
</div>
