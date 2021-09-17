<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ImSchool</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <h4>Register Here</h4>
                <form role="form" method="POST" action="{{ route('register') }}" class="form-validation">
        {{ csrf_field() }}
                  <div class="form-group">
                   <input id="name" class="form-control form-control-lg" name="name" type="text" placeholder="@lang('backoffice.name')" class="form-control no-border" value="{{ old('name') }}" required autofocus />
            @if ($errors->has('name'))
                <span class="error-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
                  </div>
                  <div class="form-group">
                   
<input id="email" placeholder="@lang('backoffice.email')" type="email" class="form-control form-control-lg"  name="email" value="{{ old('email') }}" required >
</div>
  <div class="form-group">

 <input id="password"  placeholder="@lang('backoffice.password')" type="password" class="form-control form-control-lg" name="password" required>
          </div>
 <div class="form-group">


            <input  id="password-confirm" name="password_confirmation" type="password" value="{{ old('password_confirmation') }}" placeholder="@lang('backoffice.confirm_password')" class="form-control form-control-lg" required />
        




  </div>
            @if ($errors->has('email'))
                <span class="error-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

                  </div>
                  @if ($errors->has('email'))
                <span class="error-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            @if ($errors->has('password'))
                <span class="error-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            @if ($errors->has('active'))
                <span class="error-block">
                    <strong>{{ $errors->first('active') }}</strong>
                </span>
            @endif
                  <div class="mt-3">
                    <button type="submit"  class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                      REGISTER
                    </button>
                                     
                  </div>
                
                </form>


              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
  
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/misc.js')}}"></script>
    <!-- endinject -->
  </body>
</html>