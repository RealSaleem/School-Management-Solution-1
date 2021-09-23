<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
           <title>SMS | Login</title>

      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
      <!-- icheck bootstrap -->
      <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
   </head>
   <body class="hold-transition login-page">
      <div class="login-box">
         <div class="login-logo">
            <a href="javascript:;" style="    font-size: 54px; font-family: system; "><b>SMS</b></a>
            <p style="    font-size: 30px; margin-top: -24px;"> School Management Solution </p>
         </div>
         <!-- /.login-logo -->
         <div class="card">
            <div class="card-body login-card-body">
               <form role="form" method="POST" action="{{ route('login') }}" class="form-validation">
                  {{ csrf_field() }}
                  <div class="input-group mb-3">
                     <input type="email" class="form-control" name="email" placeholder="Email">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-envelope"></span>
                        </div>
                     </div>
                  </div>
                  <div class="input-group mb-3">
                     <input type="password" name="password" class="form-control" placeholder="Password">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-lock"></span>
                        </div>
                     </div>
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
                  <div class="row">
                     <div class="col-8">
                        <div class="icheck-primary">
                           <input type="checkbox" id="remember">
                           <label for="remember">
                           Remember Me
                           </label>
                        </div>
                     </div>
                     <!-- /.col -->
                     <div class="col-4">
                     </div>
                     <!-- /.col -->
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                  </div>
               </form>
                <div class="row mt-2">
                    <div class="col-md-12">
                         <a class="btn btn-warning btn-block" href="{{ route('register') }}">
                  {{ __('Register Here ') }}
                  </a>
                    </div>
                  </div>
               @if (Route::has('password.request'))
               <p class="mb-1">
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
                  </a>
               </p>
               @endif
                
               </p>
            </div>
            <!-- /.login-card-body -->
         </div>
      </div>
      <!-- /.login-box -->
      <!-- jQuery -->
      <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
      <!-- Bootstrap 4 -->
      <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- AdminLTE App -->
      <script src="{{asset('assets/js/adminlte.min.js')}}"></script>
   </body>
</html>