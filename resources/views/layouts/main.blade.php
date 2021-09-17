<!DOCTYPE html>
<html lang="en" class="">
	<head>
		@include('layouts.main.header')
	</head>
	<body onload="doOnLoad();">
		<div class="app app-header-fixed">
		  <div id="LoaderDiv">
		    <img id="ImageLoader" align="middle" src="{{CustomUrl::asset('img/nextaxe-loader.gif')}}" />
		  </div>			
			<!-- header -->
			@include('layouts.main.topbar')
			<!-- / header -->
			<!-- aside -->
			@include('layouts.main.navigation')
			<!-- / aside -->
			<!-- content -->
			<div id="content" class="app-content" role="main">
				@yield('content')
			</div>
		</div>
		<!-- /content -->
		<!-- footer -->
		@include('layouts.main.footer')
		<!-- / footer -->
		</div>
		@include('layouts.main.scripts')
		@stack('scripts')  
	</body>
</html>