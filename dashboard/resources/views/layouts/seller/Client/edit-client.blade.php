<div class="modal fade" id="updateModal{{$client->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar</h5>
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
                    <h1 class="h4 text-gray-900 mb-4">Editar Cliente {{$client->id_client}}</h1>
                  </div>
                  <form class="client" method="post" action="{{action('ClientController@update', $client->id)}}">
                    @csrf
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name="Rut" value="{{$client->id_client}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-client" name="FirstName" value="{{$client->nombre}}">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-client" name="LastName" value="{{$client->apellido}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-8">
                        <input type="text" class="form-control form-control-client" name="Address" value="{{$client->direccion}}">
                      </div>
                      <div class="col-sm-4">
                        <input type="text" class="form-control form-control-client" name="Comuna" value="{{$client->comuna}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-8">
                        <input type="email" class="form-control form-control-client" name="InputEmail" value="{{$client->email}}">
                      </div>
                      <div class="col-sm-4">
                        <input type="text" class="form-control form-control-client" name="Phone" value="{{$client->fono}}">
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-client btn-block">
                      Editar Cliente
                    </button>
                    <hr>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
</div>
