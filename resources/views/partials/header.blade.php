<header>
    <div class="header-container">
        <div>
            <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">
        </div>
        <div class="header-list">
            <ul>
                @foreach ($dcComicsLink as $link)
                    <li>{{ $link }}</li>
                @endforeach
            </ul>
        </div>
    </div>

</header>
