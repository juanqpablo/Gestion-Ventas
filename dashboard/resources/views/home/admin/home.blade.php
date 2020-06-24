@extends('./master.admin.index')

@section('titulo','Home')

@section('contenido')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    
    <!--Incluye Articulos de  reportes en ganancias -->
      @include('layouts.admin.article')

    <!-- Content Row -->
    <div class="row">
      <!-- Incluye Analisis de graficos-->
      @include('layouts.admin.graphics')
    </div>

    <!-- Content Row -->
    <div class="row">
      @include('layouts.admin.ranking')
   </div>
   <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

@endsection
