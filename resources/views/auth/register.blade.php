<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>SMS | Register</title>
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
            <div class="card-body register-card-body">
               <form role="form" method="POST" action="{{ route('register') }}" class="form-validation">
                  {{ csrf_field() }}
                  <div class="input-group mb-3">
                     <input id="name" class="form-control" name="name" type="text" placeholder="Name Here" class="form-control no-border" value="{{ old('name') }}" required autofocus />
                     @if ($errors->has('name'))
                     <span class="error-block">
                     <strong>{{ $errors->first('name') }}</strong>
                     </span>
                     @endif
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-user"></span>
                        </div>
                     </div>
                  </div>
                  <div class="input-group mb-3">
                     <input id="email" placeholder="Email Here" type="email" class="form-control "  name="email" value="{{ old('email') }}" required >
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-envelope"></span>
                        </div>
                     </div>
                  </div>
                  <div class="input-group mb-3">
                     <input id="password"  placeholder="Password Here" type="password" class="form-control " name="password" required>
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-lock"></span>
                        </div>
                     </div>
                  </div>
                  <div class="input-group mb-3">
                     <input  id="password-confirm" name="password_confirmation" type="password" value="{{ old('password_confirmation') }}" placeholder="Confirm Password Here" class="form-control" required />
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-lock"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-8">
                        <div class="icheck-primary">
                           <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                           <label for="agreeTerms">
                           I agree to the <a href="#">terms</a>
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                     </div>
                  </div>
               </form>
                <div class="row mt-2">
                    <div class="col-md-12">
                         <a class="btn btn-info btn-block" href="{{ route('login') }}">
                  {{ __('Login Here ') }}
                  </a>
                    </div>
                  </div>


            </div>
            <!-- /.form-box -->
         </div>
         <!-- /.card -->
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