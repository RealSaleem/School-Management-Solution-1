@extends('email.emailLayouts.master')
@section('content')


<h1 style="font-size:26px; font-weight:normal; font-family:Arial, Helvetica, sans-serif;text-align:center;color:#ffd73a; font-weight: 900; padding:0px; margin:30px 0 20px 0;">Welcome To NEXTAXE</h1>
<hr style="border: #f2f2f2 solid 1px; margin:0 10%">
<h1 style="font-size:24px; font-weight:normal; font-family:Arial, Helvetica, sans-serif;text-align:center;color:#000;padding:0px; margin:20px 0 0 0;">Dear {{$user->name}}</h1>

<h2 style="font-size:20px; font-weight:normal; font-family:Arial, Helvetica, sans-serif;text-align:center;color:#999999;padding:0px; margin:30px 0 0 0;">Thank you for registering on the</h2>

<h3 style="font-size:20px; font-weight:normal; font-family:Arial, Helvetica, sans-serif;text-align:center;color:#197791;padding:0px; margin:0px 0 0 0;">NEXTAXE</h3>

@endsection

