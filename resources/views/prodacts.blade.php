@extends('layout.main')

@section('content')

    @foreach($countries as $countryTitle => $products)
        <hr>
        <h1>{{ $countryTitle }}</h1>
        @if(sizeof($products) > 0)
            @foreach(collect($products)->chunk(4) as $productChunk)
                <div class="row">
                    @foreach($productChunk as $product)
                        <div class="col-3">
                            <div class="card my-3">

                                <img class="card-img-top" src="{{ $product['img'] }}" alt="Card image cap">

                                <div class="card-body">
                                    <h5 class="card-title">{{$product['title']}}}</h5>

                                    <h2> <span class="badge badge-pill badge-success">{{$product['priceSign']}} {{$product['priceValue']}}</span></h2>
                                    <hr>

                                    <a class="btn btn-primary" class="glyphicon glyphicon-search" href="{{$product['href']}}" target="_blank">Go to the product</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        @endif
    @endforeach




















@endsection