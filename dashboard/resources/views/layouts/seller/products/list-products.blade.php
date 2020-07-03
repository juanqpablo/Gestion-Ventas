<div class="row">
  <div class="form-group col-sm-6">
      <select class="custom-select" required>
        <option value="">Categoria</option>
        <option value="1">Alimento</option>
        <option value="2">Articulo</option>
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
          <th scope="col">Codigo</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Categoria</th>
          <th scope="col">Peso (kg)</th>
          <th scope="col">Precio</th>
          <th scope="col">Stock</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">780345618</th>
          <td>Adulto Razas Pequeñas Carne y Pollo </td>
          <td>Alimento Para Perro</td>
          <td>3</td>
          <td>6990</td>
          <td>1000</td>
        </tr>
        <tr>
          <th scope="row">780345620</th>
          <td>Adulto Razas Medianas Carne y Pollo </td>
          <td>Alimento Para Perro</td>
          <td>3</td>
          <td>5990</td>
          <td>780</td>
        </tr>
        <tr>
          <th scope="row">780345650</th>
          <td>Adulto Carne</td>
          <td>Alimento para Gatos</td>
          <td>8</td>
          <td>22900</td>
          <td>1140</td>
        </tr>
      </tbody>
  </table>
</div>
