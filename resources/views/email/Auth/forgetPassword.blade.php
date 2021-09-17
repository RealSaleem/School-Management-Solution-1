@extends('email.emailLayouts.master')
@section('content')


    <p>Dear <strong>User</strong>, <br>Please click on following button for reset password. <br><br>
        <a href="  {{ url('/password/reset/'.$token) }}"
           style="background-color: dodgerblue;font-size: 15px;padding: 5px 14px;color: white;">Reset Password.</a>
    </p>



@endsection
