@extends('layout.main')

@section('content')
    <div>
        <form method="GET" action="{{ route('search')}}">
            <div class="row">
                <div class="col-4">
                    <input type="text" name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </div>
                <div class="col-8">
                    <input type="submit" value="Search" class="btn btn-outline-success my-2 my-sm-0" type="submit">
                </div>
                {{--<div class="col-2"><a class="btn btn-secondary" href="/view-statistic">view-statistic</a></div>--}}
            </div>
            <hr>
            @foreach($countries->chunk(3) as $countriesChunk)
                <div class="row">
                        @foreach($countriesChunk as $country)
                            <div class="col-lg-2 offset-lg-1">
                                <div class="card py-1 my-1">
                                <input type="checkbox"
                                       class="form-check-input"
                                       value="{{ $country->title . "|" . $country->href  }}"
                                       name="url[]"
                                       >
                                <label class="form-check-label">{{ $country->title}}</label>
                                </div>
                            </div>

                        @endforeach
                </div>
            @endforeach
        </form>
    </div>
@endsection