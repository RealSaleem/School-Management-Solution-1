<meta charset="utf-8" />
  <title> @lang('site.home_POS_inventory_system')</title>
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


  <link href="{{ CustomUrl::asset('css/layout.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{CustomUrl::asset('libs/assets/animate.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ CustomUrl::asset('css/font-awesome/css/font-awesome.min.css')  }}" type="text/css" />
  <link rel="stylesheet" href="{{ CustomUrl::asset('css/simple-line-icons/css/simple-line-icons.css')  }}" type="text/css" />
  <link rel="stylesheet" href="{{CustomUrl::asset('css/bootstrap/dist/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ CustomUrl::asset('css/toastr.css') }}">
<link rel='shortcut icon' type='image/x-icon' href='{{ url("favicon.ico") }}' />


<link rel="stylesheet" href="{{ CustomUrl::asset('css/font.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ CustomUrl::asset('css/toastr.css') }}" type="text/css" />

<link rel="stylesheet"  href="{{CustomUrl::asset('css/tabs.css')}}" type="text/css" />
  
<link rel="stylesheet"  href="{{CustomUrl::asset('css/dhtmlxcalendar.css')}}" type="text/css" />
  <link rel="stylesheet"  href="{{CustomUrl::asset('libs/select2/select2.css')}}" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ CustomUrl::asset('css/angular-material.css') }}">
<!-- <link rel="stylesheet" href="{{ CustomUrl::asset('css/app.css') }}"> -->
 <!-- Multiselect -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

<link href="{{ CustomUrl::asset('css/cropper.min.css') }}" rel="stylesheet">
<link href="{{ CustomUrl::asset('css/dropzone.css') }}" rel="stylesheet">
<link href="{{CustomUrl::asset('css/css/intlTelInput.css')}}" rel="stylesheet">
<link href="{{ CustomUrl::asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">


<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"> -->
    
    
    

  <style type="text/css">

.btn-circle {
    border-radius: 50% !important;
    padding: 0.1em;
    width:1.8em;
    background: #e0e0e0;

}

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
#LoaderDiv img {
    left: 50%;
    top: 50%;
    margin: 0 auto;
    position: fixed;
}

#LoaderDiv
{
   /* background-color: rgba(0,0,0,0.1); */
   background-color: white;
   height: 100%;
   width: 100%;
   position: fixed;
   z-index: 99999;
   left: 0;
   bottom: 0;
   right: 0;
   top: 0;
   display: none;
   opacity:0.5;
}
#my-awesome-dropzone > .dropzone .dz-preview .dz-image {
  width: 200px;
  height: 166px;
}

#my-awesome-dropzone-sub > .dropzone .dz-preview .dz-image {
  width: 273px;
  height: 206px;
}
.stepwizard-step p {
    margin-top: 0px;
    color:#666;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}
.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#bbb;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
  </style>

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