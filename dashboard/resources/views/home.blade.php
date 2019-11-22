@extends('./master.index')

@section('titulo','Home')

@section('contenido')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!--Incluye Articulos de  reportes en ganancias -->
      @include('layouts.article')

    <!-- Content Row -->
    <div class="row">
      <!-- Incluye Analisis de graficos-->
      @include('layouts.graphics')
    </div>

    <!-- Content Row -->
    <div class="row">
      @include('layouts.ranking')
   </div>
   <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

@endsection
