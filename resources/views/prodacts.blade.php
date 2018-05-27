@extends('layout.main')

@section('content')
    @foreach($countries as $countryTitle => $products)
        <h2>{{ $countryTitle }}</h2>

        @if(sizeof($products) > 0)
            <table border="1">
                <tr>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Link</th>
                </tr>
                @foreach($products as $product)
                <tr>
                    <td>
                        {{$product['title']}}
                    </td>
                    <td>
                        {{$product['price']}}
                    </td>
                    <td>
                        <a href="{{$product['href']}}" target="_blank">Go to the product</a>
                    </td>
                </tr>
                @endforeach
            </table>
        @endif
    @endforeach




















@endsection