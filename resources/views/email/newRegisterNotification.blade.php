@extends('email.emailLayouts.master')
@section('content')


<p >Dear <strong>{{ $user->name }}</strong>,
<br>
<p class="txt">A new register <strong>{{ $register->name }}</strong> has been added on outlet
  <strong>{{ $outlet->name }}</strong> of Store <strong>{{ $store->name }} </strong>
  <a href="{{ url('/') }}">NEXTAXE</a>.
</p>


@endsection

