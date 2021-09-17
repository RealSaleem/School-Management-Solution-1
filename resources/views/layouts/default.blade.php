<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="utf-8" />
    <title> @lang('site.home_POS_inventory_system')</title>
    <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    @include('layouts.newLayouts.header')
    
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"> -->

    <style type="text/css">
        ::-webkit-input-placeholder {
            font-size: 14px;
            color: #f2f2f2;
        }
        
        :-moz-placeholder {
            /* older Firefox*/
            font-size: 14px;
            color: #f2f2f2;
        }
        
        ::-moz-placeholder {
            /* Firefox 19+ */
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
        
        #LoaderDiv {
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
        }
        
        #my-awesome-dropzone > .dropzone .dz-preview .dz-image {
            width: 200px;
            height: 166px;
        }
        
        #my-awesome-dropzone-sub > .dropzone .dz-preview .dz-image {
            width: 273px;
            height: 206px;
        }
    </style>

    <script type="text/javascript">
        var lang = [];
        var defaultLanguage = localStorage.getItem('lang') != undefined ? localStorage.getItem('lang') : "en";
        localStorage.setItem("lang", lang);

        function asset(url) {
            return "{{ asset('/') }}" + url;
        }

        function site_url(url) {
            return "{{ url('/') }}" + "/" + url;
        }

        function image_path(relative_path) {
            return "{{ config('app.image_base_path') }}" + '/' + relative_path;
        }

        function IMAGE_URL(IMAGE_URL) {
            return "{{ env('IMAGE_URL')}}" + '/' + IMAGE_URL;
        }

        function sell_templates(sell_templates) {
            return "{{ env('sell_templates')}}" + '/' + sell_templates;
        }
    </script>

</head>

  <body class="content-@lang('site.lang')" onload="doOnLoad();" ng-clock>
      <div style="display: none">
          <p id="error-message">
              {{ $errors->first('name') }}
          </p>
      </div>
      <div id="LoaderDiv">
          <img id="ImageLoader" align="middle" src="{{CustomUrl::asset('img/nextaxe-loader.gif')}}" />
      </div>

      {{--@include('layouts.newLayouts.navigation')--}}
      @yield('content')
      @include('layouts.newLayouts.footer')
      @include('layouts.newLayouts.script')
      @yield('scripts')

  </body>
</html>