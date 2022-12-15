@extends('layout.app');


@section('title')
    <h1>comic</h1>
@endsection


@section('content')
    {{-- <div class="dynamic-jumbo">
        <img :src="comics[currentSeries].thumb" :alt="comics[currentSeries].series">
        <div>
            <h4>Current series</h4>
        </div>
    </div> --}}
    <section id="card-grid">
        <div>
            @foreach ($data as $comic)
                <div class="card" style="width: 18rem;">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            {{ $comic['title'] }}
                        </p>
                    </div>
                </div>
            @endforeach

        </div>
        <div>
            <button>Load more</button>
        </div>

    </section>
@endsection
