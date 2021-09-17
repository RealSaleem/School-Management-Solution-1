<!DOCTYPE html>
<html lang="en">
	@include('layouts.backoffice.head')
	<body>
		<!--================= 
			Main Wrapper Starts  
			
			==================-->
		<div class="app">
			@include('layouts.backoffice.left-side-menu')
			<!-- response message -->
		    @if (session('done'))
		    <div class="alert-s" style="display:none">
		        {{ session('done') }}
		    </div>
		    @elseif(session('error'))
		    <div class="alerte" style="display:none">
		        {{ session('error') }}
		    </div>
		    @endif
		    <!-- response message -->
			<!-- content -->
			<div id="content" class="app-content app-content_right_side" role="main">
				<!--================= 
					Main Wrapper Starts  
					
					==================-->
				<div class="bg-light  rounded  mt-0 ml-4 mr-4">
					@yield('content')
				</div>
				<!--================= 
					Ends
					
					==================-->
				<!--================= 
					Footer
					
					==================-->
				@include('layouts.backoffice.footer')
			</div>
			<!-- /content -->
		</div>
		<!--================= 
			Ends
			
			==================-->
		<!-- JavaScript Libraries -->
		@include('layouts.backoffice.scripts')
		@yield('scripts')
	</body>
</html>