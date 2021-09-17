
@extends('email.emailLayouts.master')
@section('content')

    <h3>Congratulation <strong>{{ $admin->name }}</strong></h3>
    <br>
    <p class="txt">Dear <strong>{{ $admin->name }}</strong>, <br> <br>
        Your store <strong>{{ $store->name }}</strong> has been successfully Created on <a href="{{ url('/') }}">NEXTAXE</a>.</p>
    <p>Please click the link below to update your store setting</p>
    <a href="{{ url('store/'.$store->id.'/edit') }}" style="background-color: dodgerblue;color: whitesmoke;padding: 7px;">Edit Store</a>
    <br>
    <br>
    <br>

@endsection
