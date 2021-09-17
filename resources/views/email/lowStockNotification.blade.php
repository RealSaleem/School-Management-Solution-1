@extends('email.emailLayouts.master')
@section('content')

    <p class="txt">
        Dear <strong>{{$user->name}}</strong>,<br>
        The following items have low stock, kindly visit products.
    </p>
    <div class="tableouter">
        <table class="table table-striped" id="product-table">
            <thead>
            <tr>
                <th style="width:20%">{{ __('backoffice.product_name') }}</th>
                <th style="width:10%">{{ __('backoffice.stock') }} </th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                    <tr>
                        <td>{{$product['name']}}</td>
                        <td>{{'asasas'}}</td>
                    </tr>
            @endforeach
            </tbody>
        </table>

@endsection
