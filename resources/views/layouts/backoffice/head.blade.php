<head>
    <meta charset="utf-8">
    <title>Nextaxe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <!-- Bootstrap CSS File -->
    <link href="{{ CustomUrl::asset('pos/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Libraries CSS Files -->
    <link href="{{ CustomUrl::asset('pos/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <link href="{{ CustomUrl::asset('pos/assets/css/sidenav.css') }}" rel="stylesheet">
    <link href="{{ CustomUrl::asset('pos/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ CustomUrl::asset('pos/assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ CustomUrl::asset('pos/assets/css/color1.css') }}" rel="stylesheet">
    <link href="{{ CustomUrl::asset('pos/assets/css/pos.css') }}" rel="stylesheet">
    <link href="{{ CustomUrl::asset('css/dropzone.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ CustomUrl::asset('css/angular-material.css') }}">

    <link href="{{ CustomUrl::asset('site/assets/css/select2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ CustomUrl::asset('css/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="https://coreui.io/v1/demo/AngularJS_Demo/vendors/css/simple-line-icons.min.css">
    <link rel="stylesheet" type="text/css" href="https://coreui.io/v1/demo/AngularJS_Demo/vendors/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link type="text/css" href="{{CustomUrl::asset('css/css/intlTelInput.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script type="text/javascript">
      var lang = [];
      var defaultLanguage = localStorage.getItem('lang') != undefined  ? localStorage.getItem('lang') : "en";
      localStorage.setItem("lang",lang);

      function asset(url){
        return "{{ asset('/') }}" + url;
      }
        function site_url(url){
          return "{{ url('/') }}" + "/" + url;
        }

        function image_path(relative_path){
          return "{{ config('app.image_base_path') }}" + '/' + relative_path;
        }
        function IMAGE_URL(IMAGE_URL){
          return  "{{ env('IMAGE_URL')}}"+'/'+  IMAGE_URL;
        }
        function sell_templates(sell_templates){
          return  "{{ env('sell_templates')}}"+'/'+  sell_templates;
        }
    </script>
</head>
