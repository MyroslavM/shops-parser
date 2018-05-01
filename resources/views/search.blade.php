@extends('layout.main')

@section('content')
    <div>
        <form method="GET" action="{{ route('search')}}">
            <input type="text" name="search">
            <input type="submit" value="search">

            <hr>
            @foreach($countries->chunk(3) as $countriesChunk)
                <div class="row">
                        @foreach($countriesChunk as $country)
                            <div class="col-4">
                                <input type="checkbox"
                                       class="form-check-input"
                                       value="{{ $country['url'] }}"
                                       name="url[]"
                                       checked>
                                <label class="form-check-label">{{ $country['title'] }}</label>
                            </div>

                        @endforeach
                </div>
            @endforeach
        </form>
    </div>
@endsection