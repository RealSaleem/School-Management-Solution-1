@extends('email.emailLayouts.master')
@section('content')

    @if(isset($data['supplier_name']))
       Dear Respective,<strong>Mr.{{ $data['supplier_name'] }}</strong> Requesting for My-Fatoorah Vendor Id <br>
<div>
    <table class="table table2">
        <tr>
            <td>Supplier name</td>
            <td>{{ $data['supplier_name'] }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $data['email'] }}</td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td>{{ $data['mobile'] }}</td>
        </tr>
        <tr>
            <td>Bank name</td>
            <td>{{ $data['bank_name'] }}</td>
        </tr>
        <tr>
            <td>Account holder name</td>
            <td>{{ $data['holder_name'] }}</td>
        </tr>
        <tr>
            <td>Account URL</td>
            <td>{{ $data['account'] }}</td>
        </tr>
        <tr>
            <td>Iban</td>
            <td>{{ $data['iban'] }}</td>
        </tr>
    </table>

</div>

        <br>  by store <strong>{{ $user->name }}</strong> with email <strong>{{ $user->email }}</strong> </p>
    @endif

    @if(isset($data['username_en']))
        <h3>Reqest for Payza Account </h3> <br>


        <table class="table table2">
            <tr>
                <td>Username English</td>
                <td>{{ $data['username_en'] }}</td>
            </tr>
            <tr>
                <td>Username Arabic</td>
                <td>{{ $data['username_ar'] }}</td>
            </tr>
            <tr>
                <td>Address English</td>
                <td>{{ $data['address_en'] }}</td>
            </tr>
            <tr>
                <td>Address Arabic</td>
                <td>{{ $data['address_ar'] }}</td>
            </tr>
            <tr>
                <td>Alternate Number</td>
                <td>{{ $data['alternate_number'] }}</td>
            </tr>
            <tr>
                <td>Web Site URL</td>
                <td>{{ $data['web_site_url'] }}</td>
            </tr>
            <tr>
                <td>Company Name</td>
                <td>{{ $data['company_name'] }}</td>
            </tr>
            <tr>
                <td>Short Description</td>
                <td>{{ $data['short_description'] }}</td>
            </tr>
        </table>
        <br>  by store <strong>{{ $user->name }}</strong> with email <strong>{{ $user->email }}</strong> </p>
    @endif

@endsection
