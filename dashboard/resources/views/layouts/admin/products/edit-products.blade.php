<div class="modal fade" id="updateModal{{$product->id_prod}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <h1 class="h4 text-gray-900 mb-4">Editar Producto</h1>
                  </div>
                  <form class="user" method="post" action="{{action('ProductController@update', $product->id_prod)}}">
                    @csrf
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name="inputCodP" value="{{$product->cod_product}}">
                      </div>
                      <div class="col-sm-6 ">
                          <select class="custom-select" required name="TypeProd">
                            <option value=""> Categoria</option>
                            <option value="1" @if($product->categoria=="Alimento")
                                                selected
                                              @endif
                            > Alimento</option>
                            <option value="2" @if($product->categoria=="Articulo")
                                                selected
                                              @endif
                            > Articulo</option>
                          </select>
                          <div class="invalid-feedback">Example invalid custom select feedback</div>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="inputNombre" value="{{$product->nombre}}">
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-4 mb-3 mb-sm-0">
                        <input type="number" class="form-control form-control-user" name="inputPeso" value="{{$product->peso}}">
                      </div>
                      <div class="col-sm-4">
                        <input type="number" class="form-control form-control-user" name="inputPrecio" value="{{$product->precio}}">
                      </div>
                      <div class="col-sm-4">
                        <input type="number" class="form-control form-control-user" name="inputStock" value="{{$product->stock}}">
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Editar Producto
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
