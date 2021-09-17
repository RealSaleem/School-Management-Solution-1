@extends('email.emailLayouts.master')
@section('content')


<p >Dear <strong>{{ $store->name }}</strong>, <br><br>
<p class="txt">You have added <strong>{{ $customer->name }}</strong> as your respected <br> customer of Store <strong>{{ $store->name }}</strong>  on <a href="{{ url('/') }}">NEXTAXE</a>.</p>

@endsection
