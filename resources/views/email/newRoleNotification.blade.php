@extends('email.emailLayouts.master')
@section('content')
    @if($is_edit==true)
        <p>Dear <strong>{{ $user->name }}</strong>, <br>
        <p class="txt">The Role <strong>"{{ $role->name }}"</strong> has been Updated successfully on Store
            <strong>"{{ $store->name }}"</strong> on <a href="{{ url('/') }}">NEXTAXE</a>.</p>
    @endif
    @if($is_edit==false)
        <p>Dear <strong>{{ $user->name }}</strong>, <br>
        <p class="txt">The new role <strong>"{{ $role->name }}"</strong> has been added successfully on Store
            <strong>"{{ $store->name }}"</strong> on <a href="{{ url('/') }}">NEXTAXE</a>.</p>
    @endif
@endsection
