@extends('email.emailLayouts.master')
@section('content')

    @if(!$is_admin)

        <p>Dear <strong>{{ $user->name }}</strong>, <br><br>
        <p class="txt">You have been added as a user with the role <strong>{{ $user->getRoleNames()[0] }}</strong> of
            Store <strong>{{$user->store->name}}</strong> on <a href="{{ url('/') }}">NEXTAXE</a>.</p>

        <table class="table table2">
            <tbody>
            <tr>
                <th width="50%">Email</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ $pass}}</td>
            </tr>

            </tbody>
        </table>
        <br>  <p>You can login here by clicking the bellow link.</p>
        <a href="{{ url('login') }}">{{ url('login') }}</a>

    @endif

    @if($is_admin)

        <p class="txt">The new user has been added successfully with the <strong>{{ $user->getRoleNames()[0] }}</strong>
            role and the assigned outlet/outlets <strong>{{ $outlet }}</strong> of Store
            <strong>{{ $store->name }}</strong> on <a href="{{ url('/') }}">NEXTAXE</a>.</p>

        <table class="table table2">
            <tbody>
            <tr>
                <th width="50%">Name</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td>{{ $user->mobile }}</td>
            </tr>
            <tr>
                <th>Outlets</th>
                <td>{{isset($outlet) ? $outlet : ""}}</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>{{ $user->getRoleNames()[0] }}</td>
            </tr>

            </tbody>
        </table>

    @endif



@endsection
@section('scripts')
    <script src="{{CustomUrl::asset('js/angular-app/services/data/store-data-service.js')}} "></script>
    <script src="{{CustomUrl::asset('js/angular-app/controllers/store/store-controller.js')}} "></script>
@endsection
