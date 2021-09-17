
<script type="text/javascript">
	var BASE_URL = '{{ CustomUrl::asset('') }}';
  window.Laravel = '{{ csrf_token() }}';
</script>
@include('layouts.guest_header')
  @include('layouts.navigation')
  @yield('content')
    <div class="wrapper b-t bg-light">
      <!-- <span class="pull-right"> <a href ui-scroll="app" class="m-l-sm text-muted"><i class="fa fa-long-arrow-up"></i></a></span> -->
       @lang('site.copyright_©_NEXTAXE')
		<ul class="footerlink">
	      	<li ><a href="{{route('about_us')}}">
	          <span>@lang('site.about_us')</span>
	        </a>
	      	</li>
        	<li>
            <a  href="{{route('privacy_policy')}}">
              <span>@lang('site.privacy_policy')</span>
            </a>
          </li>
      </ul>
    </div>
@include('layouts.footer')
  @yield('scripts')