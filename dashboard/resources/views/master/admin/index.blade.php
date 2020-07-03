<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> @yield('titulo') - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="css/404.css" rel="stylesheet" type="text/css">
  <link href="css/app.css" rel="stylesheet" type="text/css">
  <link href="css/sb-admin-2.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
  <link rel="stylesheet" href="css/sb-profile.css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">

  <!-- Page Wrapper -->

  <div id="wrapper">
    @if(auth()->user()->rol=="administrador")
        <!-- Start Sidebar -->
        @include('layouts.admin.sidebar')
        <!-- End Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('layouts.admin.top-bar')

                @yield('contenido')
                <!-- Footer -->
                @include('layouts.admin.footer')
                <!-- End of Footer -->
            </div>
            <!-- End Main Content -->
        </div>
        <!-- End of Content Wrapper -->
      </div>
      <!-- End of Page Wrapper -->
    @else
      @include('layouts.404')
    @endif


 <script src="js/app.js" type="text/JavaScript"></script>
 <script src="js/sb-admin-2.js" type="text/JavaScript"></script>

</body>
</html>
