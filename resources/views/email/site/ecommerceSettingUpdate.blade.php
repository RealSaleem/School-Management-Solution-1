@extends('email.emailLayouts.master')
@section('content')

    <h3>Dear <strong>{{ $admin->name }}</strong></h3>
    <br>
    <p class="txt">E-Commerce Setting has been successfully updated by <strong>{{ $user->name }}</strong> on <a href="{{ url('/') }}">NEXTAXE</a>.
    </p>


    <br>

@endsection
