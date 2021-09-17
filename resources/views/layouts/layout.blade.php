<script type="text/javascript">
	var BASE_URL = '{{ asset('') }}';
  window.Laravel = '{{ csrf_token() }}';
</script>
@include('layouts.header')
  @include('layouts.navigation')
  @yield('content')
    <footer class="fixed-footer">
      @lang('site.copyright_©_NEXTAXE')
  		<ul class="footerlink">
      	<li>
          <a href="{{route('about_us')}}">
            <span>@lang('site.about_us')</span>
          </a>
      	</li>
      	<li>
          <a  href="{{route('privacy_policy')}}">
            <span>@lang('site.privacy_policy')</span>
          </a>
        </li>
      </ul>
    </footer>
@include('layouts.footer')
  @yield('scripts')