<!-- START NAV-->
<nav id="nav">
    <figure><a href="/"><img class="logo" src="{{ asset('img/logo_budinok_prirodi.png') }}" alt="Київський Міський Будинок Природи"></a>
        <figcaption>
            <h4>КП "Київський міський Будинок природи"</h4>
        </figcaption>
    </figure>
    <menu>
        <ul>
            @foreach($links as $link)
            <li><a href="{{ $link->href }}">{{ $link->text }}</a></li>
            @endforeach
        </ul>
    </menu>
</nav>
<!-- END NAV-->