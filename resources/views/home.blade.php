@extends('layout.app');


@section('title')
    Comic
@endsection


@section('content')
    <section>
        <div class="dynamic-jumbo">
            <div>
                <h4>Current series</h4>
            </div>
        </div>

    </section>
    <section id="comics-grid">

        <div class="container my-5">
            <div class="row  d-flex row-cols-6 g-2">
                @foreach ($data as $comic)
                    <div class="col">
                        <div class="card w-100">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">
                                    {{ $comic['title'] }}
                                </p>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
        <div class="abc">
            <button>Load more</button>
        </div>
    </section>
@endsection
