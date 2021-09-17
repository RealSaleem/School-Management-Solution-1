@extends('email.emailLayouts.master')
@section('content')

<h3>Welcome to Nextaxe</h3>
<p class="txt">Dear <strong>{{ $user->name }}</strong>,<br><br>
	Thank you for registering on the <strong>NEXTAXE</strong>. <br>
Below you will find your activation link that you can use to activate you <strong>NEXTAXE</strong> account.</p>
<p>Activation Link: <br><br>
<a href="{{ route('verifyemail',$email_token)}}" target="_blank" style="background-color: dodgerblue; color: whitesmoke; padding: 10px;" > CLICK HERE!</a>
</p>
@endsection
