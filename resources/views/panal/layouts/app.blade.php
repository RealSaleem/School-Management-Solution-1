<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMS | {{ucfirst(\Request::segment(1))}}</title>


   @include('panal.layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<style type="text/css">
  .layout-fixed .brand-link {
  width: 250px !important;
  background-color: dodgerblue !important;
    color: white !important;
    text-align: center !important;
}


.nav-sidebar .nav-item>.nav-link {
          color: #696969c9 !important;
}

[class*=sidebar-light-] .nav-sidebar>.nav-item.menu-open>.nav-link, [class*=sidebar-light-] .nav-sidebar>.nav-item:hover>.nav-link {
  color: dodgerblue !important;
  }

  h1,h2,h3,h4,h5{
      color: #696969c9 !important;
  }
  label{
      color: #696969c9 !important;
  }
</style>

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
