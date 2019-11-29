@extends('./master.seller.index')

@section('titulo','Home')

@section('contenido')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!--Incluye Articulos de  reportes en ganancias -->
      @include('layouts.seller.article')

    <!-- Content Row -->
    <div class="row">
      <!-- Incluye Analisis de graficos-->
      @include('layouts.seller.graphics')
    </div>

    <!-- Content Row -->
    <div class="row">
      @include('layouts.seller.ranking')
   </div>
   <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

@endsection
