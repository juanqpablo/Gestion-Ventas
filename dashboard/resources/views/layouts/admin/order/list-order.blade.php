<div class="row">
  <div class="form-group col-sm-6">
      <select class="custom-select" required>
        <option value="">Estado</option>
        <option value="1">Pendiente</option>
        <option value="2">Enviado</option>
        <option value="3">Aceptado</option>
        <option value="3">Rechazado</option>
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
          <th scope="col">Cod-Vend</th>
          <th scope="col">Numero de Orden</th>
          <th scope="col">Rut CLIENTE</th>
          <th scope="col">Fecha</th>
          <th scope="col">Total</th>
          <th scope="col">Estado</th>
          <th scope="col">Detalle</th>
        </tr>
      </thead>
      <tbody>
        @if($orders->isEmpty())
          <p>NO Hay Registros de Pedido</p>
        @else
          @foreach ($orders as $order)
            <tr>
              <th scope="row">{{$order->id_pedido}}</th>
              <td>{{$order->id_cliente}}</td>
              <td>{{$order->cod_usuario}}</td>
              <td>{{$order->fecha}}</td>
              <td>{{$order->total}}</td>
              <td>{{$order->estado}}</td>
              <td>
                {{-- @include('layouts/admin/order/edit-client') --}}
                <button  id="{{$order->id}}" name="edit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updateModal{{$order->id}}">
                  <i class="far fa-clipboard fa-md"></i> Editar
                </button>
              </td>
              <td>
                <form class="client" method="post" action="{{action('OrderController@destroy', $order->id)}}">
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
