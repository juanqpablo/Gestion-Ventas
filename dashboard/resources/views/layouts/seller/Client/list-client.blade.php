<div class="table-responsive-lg table-responsive-md table-responsive-sm  table-responsive-xs">
  <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Rut</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Comuna</th>
          <th scope="col">Dirección</th>
          <th scope="col">Fono</th>
          <th scope="col">Correo</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
        @if($clients->isEmpty())
          <p>NO Hay Registros de Clientes</p>
        @else
          @foreach ($clients as $client)
            <tr>
              <th scope="row">{{$client->id_client}}</td>
              <td>{{$client->nombre}}</td>
              <td>{{$client->apellido}}</td>
              <td>{{$client->comuna}}</td>
              <td>{{$client->direccion}}</td>
              <td>{{$client->fono}}</td>
              <td>{{$client->email}}</td>
              <td>
                @include('layouts/seller/Client/edit-client')
                <button  id="{{$client->id}}" name="edit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updateModal{{$client->id}}">
                  <i class="far fa-clipboard fa-md"></i> Editar
                </button>
              </td>
              <td>
                <form class="client" method="post" action="{{action('ClientController@destroy', $client->id)}}">
                  @csrf
                  <button type="submit" class="btn btn-danger btn-sm">
                    <i class="fas fa-user-times fa-md"></i> Eliminar
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
        @endif
      </tbody>
  </table>
</div>
