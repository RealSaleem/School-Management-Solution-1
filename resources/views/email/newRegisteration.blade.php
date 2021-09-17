@extends('email.emailLayouts.master')
@section('content')

    <h1 style="font-size:26px; font-weight:normal; font-family:Arial, Helvetica, sans-serif;text-align:center;color:#ffd73a; font-weight: 900; padding:0px; margin:30px 10% 20px 10%;">
        <span>New User Added</span>
        @if($user->store_id != null)
            <span>On {{$user->store_id}}</span>
        @endif
    </h1>
    <div style=" width: 70%; text-align: center;">
    <table width="100%" border="0" cellspacing="1" cellpadding="7" style="background:#e3e3e3;" class="table table2">
        <tbody>
        <tr>
            <td bgcolor="#FFFFFF">User Name</td>
            <td bgcolor="#FFFFFF" style="color:#666;">{{$user->name}}</td>
        </tr>
        @if($user->username != null)
            <tr>
                <td bgcolor="#FFFFFF" width="50%">User Name</td>
                <td bgcolor="#FFFFFF" width="50%" style="color:#666;">{{$user->username}}</td>
            </tr>
        @endif
        <tr>
            <td bgcolor="#FFFFFF">Email</td>
            <td bgcolor="#FFFFFF" style="color:#666;">{{$user->email}}</td>
        </tr>
        @if($user->store_id != null)
            <tr>
                <td bgcolor="#FFFFFF">Store Name</td>
                <td bgcolor="#FFFFFF" style="color:#666;">{{$user->store_id}}</td>
            </tr>
        @endif
        @if($user->outlet_id != null)
            <tr>
                <td bgcolor="#FFFFFF">Outlet</td>
                <td bgcolor="#FFFFFF" style="color:#666;">{{$user->outlet_id}}</td>
            </tr>
        @endif

        </tbody>
    </table>
    </div>

@endsection

