<!-- Begin Page Content -->
<div class="container-fluid error-404">
  <!-- 404 Error Text -->
  <div class="background">
      <div class="text-center card-body">
        <div class="error mx-auto text-color" data-text="404" >403</div>
        <p class="lead text-color" style="color:white;" >Lo sentimos</p>
        <p class="text-color">Usted no tiene los permisos necesarios para entrar a esta sección</p>
        @if(auth()->user()->rol == "administrador")
            <a class="text-color" href="{{route("admin")}}">&larr; Volver al panel de administración</a>
        @else
            <a href="{{route("seller")}}">&larr; Volver al panel de administración</a>
        @endif
      </div>
  </div>

</div>
<!-- /.container-fluid -->
