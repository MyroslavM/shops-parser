@extends('layout.main')

@section('content')
    <div>
        <form method="GET" action="{{ route('search')}}">
            <div class="row">
                <div class="col-10">
                    <input type="text" name="search">
                    <input type="submit" value="search"></div>
                <div class="col-2"><a class="btn btn-secondary" href="/view-statistic">view-statistic</a></div>
            </div>
            <hr>
            @foreach($countries->chunk(3) as $countriesChunk)
                <div class="row">
                        @foreach($countriesChunk as $country)
                            <div class="col-lg-4">
                                <input type="checkbox"
                                       class="form-check-input"
                                       value="{{ $country->title . "|" . $country->href  }}"
                                       name="url[]"
                                       >
                                <label class="form-check-label">{{ $country->title}}</label>
                            </div>

                        @endforeach
                </div>
            @endforeach
        </form>
    </div>
@endsection