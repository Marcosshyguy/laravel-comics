@extends('layout.app');
@section('title')
    Second page
@endsection


@section('content')
    <section id="comics-grid">

        <div class="container my-5">
            <div class="row  d-flex row-cols-6 g-2">
                @foreach ($data as $comic)
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                {{ $comic['title'] }}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: {{ $comic['price'] }}</li>
                                <li class="list-group-item">First sale: {{ $comic['sale_date'] }}</li>
                                <li class="list-group-item">
                                    Writers:
                                    <ul class="list-group list-group-flush">
                                        @foreach ($comic['writers'] as $writer)
                                            <li class="list-group-item">
                                                {{ $writer }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
