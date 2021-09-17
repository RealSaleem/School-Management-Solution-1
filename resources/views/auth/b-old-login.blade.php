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
                <h4>Hello! let's get started</h4>
                <form role="form" method="POST" action="{{ route('login') }}" class="form-validation">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
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
                      SIGN IN
                    </button>
                   <!--  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN IN</a> -->
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
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