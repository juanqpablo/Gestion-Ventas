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

<div class="table-responsive-lg table-responsive-md table-responsive-sm  table-responsive-xs">
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
        <tr>
          <th scope="row">1</th>
          <td>Juan</td>
          <td>Quezada</td>
          <td>juan@gmail.com</td>
          <td>Vendedor</td>
          <td>
            <button class="btn btn-primary btn-sm"><i class="far fa-clipboard fa-md"></i> Editar</button>
          </td>

          <td>
            <button class="btn btn-danger btn-sm"><i class="fas fa-user-times fa-md"></i> Eliminar</button>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Edgardo</td>
          <td>Quezada</td>
          <td>edgardo@gmail.com</td>
          <td>Vendedor</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
          <td>Vendedor</td>
        </tr>
      </tbody>
  </table>
</div>
