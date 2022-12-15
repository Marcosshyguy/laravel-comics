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

                {{-- <li v-for="(link, linkIndex) in this.itemListHeader" :key="linkIndex"
                        :class="(link.linkState) ? 'underlined' : ''">
                        <a @click="linkSelected (linkIndex)"
                            :class="(link.linkState) ? 'colored' : ''">{{ link . linkName }}</a>
                    </li> --}}
            </ul>
        </div>
    </div>

</header>
