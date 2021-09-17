<!DOCTYPE html>
<html lang="en" class="" ng-app="posApp">
<head>
  <meta charset="utf-8" />
  <title>@lang('site.home_POS_inventory_system')</title>
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <link href="{{ CustomUrl::asset('css/layout.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{CustomUrl::asset('libs/assets/animate.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ CustomUrl::asset('css/font-awesome/css/font-awesome.min.css')  }}" type="text/css" />
  <link rel="stylesheet" href="{{ CustomUrl::asset('css/simple-line-icons/css/simple-line-icons.css')  }}" type="text/css" />
  <link rel="stylesheet" href="{{CustomUrl::asset('css/bootstrap/dist/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ CustomUrl::asset('css/toastr.css') }}">



<link rel="stylesheet" href="{{ CustomUrl::asset('css/font.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ CustomUrl::asset('css/toastr.css') }}" type="text/css" />

<link rel="stylesheet"  href="{{CustomUrl::asset('css/tabs.css')}}" type="text/css" />
  
<link rel="stylesheet"  href="{{CustomUrl::asset('css/dhtmlxcalendar.css')}}" type="text/css" />
<!--   <link rel="stylesheet"  href="{{CustomUrl::asset('css/select2.min.css')}}" type="text/css" /> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ CustomUrl::asset('css/angular-material.css') }}">
<!-- <link rel="stylesheet" href="{{ CustomUrl::asset('css/app.css') }}"> -->
 <!-- Multiselect -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">




  <style type="text/css">
    ::-webkit-input-placeholder {
 font-size: 14px;
 color: #f2f2f2;
}
:-moz-placeholder { /* older Firefox*/
 font-size:14px;
 color: #f2f2f2;
}
::-moz-placeholder { /* Firefox 19+ */ 
 font-size: 14px;
 color: #f2f2f2; 
} 
:-ms-input-placeholder { 
 font-size: 14px; 
 color: #f2f2f2;
}
  </style>

  <script type="text/javascript">
    function CustomUrl::asset(url){
      return "{{ CustomUrl::asset('/') }}" + url;
    }
      function site_url(url){
        return "{{ url('/') }}" + "/" + url;
      }

      function image_path(relative_path){
        return "{{ config('app.image_base_path') }}" + '/' + relative_path;
      }



  </script>
  
</head>
<body class="content-@lang('site.lang')" onload="doOnLoad();" ng-clock>
  <div style="display: none">
    <p id="error-message">
        {{ $errors->first('name') }}
    </p>
  </div>