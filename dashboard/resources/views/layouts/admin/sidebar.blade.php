
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }} <i class="fa fa-circle"  style="color:red;" aria-hidden="true"></i>
                </div>
            @endif
            En Linea <i class="fa fa-circle"  style="color:green;" aria-hidden="true"></i>

        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item {{setActive('admin')}} ">
        <a class="nav-link" href="{{route('admin')}}">
          <i class="fas fa-home"></i>
          <span> Inicio</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Gestión Empresarial
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item {{setActive('orders')}} {{setActive('sents')}} ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-dollar-sign"></i>
          <span>Ventas</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> Opciones:</h6>
            <a class="collapse-item" href="{{route('orders')}}"><i class="fas fa-box"></i> Pedidos</a>
            <a class="collapse-item" href="{{route('sents')}}"><i class="fas fa-truck"></i> Envios</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item {{setActive('product')}} ">
        <a class="nav-link" href="{{route('product')}}">
          <i class="fas fa-fw fa-boxes"></i>
          <span> Productos</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReporte" aria-expanded="true" aria-controls="collapsePages">
        <!--  <i class="fas fa-fw fa-folder"></i>-->
          <i class="far fa-clipboard"></i>
          <span> Reportes</span>
        </a>
        <div id="collapseReporte" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones:</h6>
            <a class="collapse-item" href="#">Ganancias</a>
            <a class="collapse-item" href="#">Ventas Totales</a>
            <a class="collapse-item" href="#"> Ranking Vendedores</a>
            <a class="collapse-item" href="#">Facturas y Liquidaciones</a>
        <!--    <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>-->
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Gestión de Personal
      </div>

      <li class="nav-item {{setActive('users')}} ">
        <a class="nav-link" href="{{route('users')}}">
            <i class="fas fa-fw fa-users"></i>
          <span> Usuarios</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Gestión de Clientes
      </div>

      <li class="nav-item {{setActive('client')}} ">
        <a class="nav-link" href="{{route('client')}}">
          <i class="fas fa-fw fa-male"></i>
          <span> Clientes</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
