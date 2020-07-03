<div class="row">
  <div class="form-group col-sm-6">
      <select class="custom-select" required>
        <option value="">Tipo de usuario</option>
        <option value="1">Administrador</option>
        <option value="2">Vendedores</option>
      </select>
      <div class="invalid-feedback">Example invalid custom select feedback</div>
  </div>
  <!-- Topbar Search -->
  <form class="d-none d-sm-inline-block form-inline ml-auto  mw-100 navbar-search">
    <div class="input-group">
      <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-primary" type="button">
          <i class="fas fa-search fa-sm"></i>
        </button>
      </div>
    </div>
  </form>
</div>

<div class="table-responsive">
  <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Correo</th>
          <th scope="col">Rol</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
        @if($users->isEmpty())
          <p>NO Hay Registros de Usuarios</p>
        @else
          @foreach ($users as $user)
            <tr>
              <th scope="row">{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->apellido}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->rol}}</td>
              <td>
                @include('layouts/admin/users/edit-user')
                <button  id="{{$user->id}}" name="edit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updateModal{{$user->id}}">
                  <i class="far fa-clipboard fa-md"></i> Editar
                </button>
              </td>
              <td>
                <form class="user" method="post" action="{{action('UserController@destroy', $user->id)}}">
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
{{-- href="{{action('UserController@show', $user->id)}}" --}}
