@extends('email.emailLayouts.master')
@section('content')


    <p >Dear <strong>{{ $supplier->name }}</strong>, <br>
    <p class="txt">You are added as a Supplier  in Store <strong>{{ $store->name }}</strong> on <a href="{{ url('/') }}">NESTAXE.</a></p>

@endsection
