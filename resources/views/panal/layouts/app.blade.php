<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>


   @include('panal.layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">


<div class="wrapper">

  <!-- Preloader -->
<!--   <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('assets/img/AdminLTELogo.gif')}}" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
      @include('panal.layouts.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
   @include('panal.layouts.side_nav')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container">
    @yield('content')
    </div>
    <!-- /.content -->
  </div>
  

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


@include('panal.layouts.scripts')
@yield('script')
</body>
</html>
