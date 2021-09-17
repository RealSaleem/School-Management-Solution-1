@extends('email.emailLayouts.master')
@section('content')

<p >Dear <strong>{{ $admin->name }}</strong>, <br>
<p class="txt">A new supplier <strong>{{ $supplier->name }}</strong> has been added on store <strong>{{ $store->name }}</strong> on <a href="{{ url('/') }}">NESTAXE.</a></p>

@endsection
