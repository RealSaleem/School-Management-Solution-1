<!DOCTYPE html>
<html lang="en">
    @include('backoffice.partials.backoffice.head')
    <body>
        <!--================= 
			Main Wrapper Starts  
			==================-->

        <div id="LoaderDiv" style="display: none;">
            <img id="ImageLoader" src="{{ asset('img/nextaxe-loader.gif') }}" />
        </div>
        <div class="app">
            @include('backoffice.partials.backoffice.left-side-menu')
            <!-- response message -->
            @if (session('done'))
            <div class="alert-s" style="display: none;">
                {{ session('done') }}
            </div>
            @elseif(session('error'))
            <div class="alerte" style="display: none;">
                {{ session('error') }}
            </div>
            @endif

            <!-- response message -->
            <!-- content -->
            <div id="content" class="app-content app-content_right_side" role="main">
                <!--================= 
					Main Wrapper Starts  
					
					==================-->
                <div class="bg-light rounded mt-md-0 ml-md-4 mr-md-4 position-relative">
                    <a href="#" class="menu-toogler" ui-toggle-class="app-aside-folded" target=".app">
                        <i class="icon-list text"></i>
                        <i class="icon-menu text-active"></i>
                    </a>
                    @yield('content')
                </div>
                <!--================= 
					Ends
					
					==================-->
                <!--================= 
					Footer
					
					==================-->
                @include('backoffice.partials.backoffice.footer')
            </div>
            <!-- /content -->
        </div>
        <!--================= 
			Ends
			
			==================-->
        <!-- JavaScript Libraries -->
        @include('backoffice.partials.backoffice.scripts') @yield('scripts')
    </body>
</html>
