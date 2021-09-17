@extends('layouts.app')

@section('content')


    <!-- <div class="row">
  <div class="col-md-12 col-md-offset-11">
    <a href="https://www.nextaxe.com" style="margin-left: 50px;">
      <i class="fa fa-home" style="font-size: 30px; color: #666; margin-top: 30px;"></i>
    </a>
  </div>
</div>
 -->
    <div class="mainp-bg" style="background-image:url('{{CustomUrl::asset('img/bg_new.svg')}}')">

        <div>
            <div class="form">
                <div class="logo"><img src="{{CustomUrl::asset('backoffice/assets/img/logo.png')}}"></div>


{{--                <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">--}}
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">

                    {{ csrf_field() }}

                    <div class="form2">
                        <form2>



                            <div class="feilds_area">
                            <!-- <h2>@lang('site.reset_password')</h2> -->
                                <input id="email" class="inputs" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="@lang('site.e-mail_address')">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                                @endif

                                <button type="submit" class="submitbtn1">
                                    @lang('site.send_password_reset_link')
                                </button>
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>

                        </form2>
                    </div>

                    <p> <a href="{{route('login')}}" style="padding:3px 12px;"><strong>@lang('site.login')</strong></a>

                        <a href="{{route('register')}}" style="padding:3px 12px;"><strong>@lang('site.sign_up')</strong></a></p>

                </form>
                <div class="copyright copyright1"><p>@lang('site.copyright_©_NEXTAXE')</p></div>
            </div>
        </div>
    </div>



    <!-- Original Reset Code -->

    <!-- <div class="row">
      <div class="col-md-12 col-md-offset-11">
        <a href="https://www.nextaxe.com" style="margin-left: 50px;">
          <i class="fa fa-home" style="font-size: 30px; color: #666; margin-top: 5px;"></i>
        </a>
      </div>
    </div> -->
    <!-- <div class="login_form container" > -->
    <!-- <div class="col-md-2">
    <div class="main_area">
      <a href="{{url('/')}}" class="page_login active"><i class="fa fa-user"></i>@lang('site.login')</a>
      <a href="{{route('register')}}" class="page_register"><i class="fa fa-user"></i>  @lang('site.register')</a>
    </div>
  </div>   -->
    <!-- <div class="col-md-4">
    <div class="logo_area">
      <h2><strong></strong></h2>
      <a href=""><img src="{{CustomUrl::asset('img/logo.svg')}}"></a>
    </div>
    <div class="copyright"><p>@lang('site.copyright_©_NEXTAXE')</p></div>
  </div> -->
    <!-- <div class="col-md-6">
      <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        <div class="feilds_area">
          <h2>@lang('site.reset_password')</h2>
          <input id="email" class="inputs" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="@lang('site.e-mail_address')">

            @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

        <button type="submit" class="submitbtn1">
            @lang('site.send_password_reset_link')
        </button>
            @if (session('status'))
        <div class="alert alert-success">
{{ session('status') }}
            </div>
        @endif
        </div>
      </form>


    <div class="copyright copyright1"><p>@lang('site.copyright_©_NEXTAXE')</p></div>
  </div>
</div>

 -->


@endsection
@section('scripts')
    <script src="{{CustomUrl::asset('js/angular-app/services/data/store-data-service.js')}} "></script>
@endsection
