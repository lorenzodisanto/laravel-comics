<header>
    <div class="header-top"></div>
    <div class="header-link container">
        
        <!-- logo homepage -->
      <a class="link" href="{{ route('home') }}">
        <img src="{{ Vite::asset('/resources/images/dc-logo.png')}}" alt="">
      </a>

      <!-- lista link -->
      <ul>
        <li>
            <a class="link" href="{{ route('characters') }}">CHARACTERS</a>
        </li>
        <li>
            <a class="link" href="{{ route('comics') }}">COMICS</a>
        </li>
        <li>
            <a class="link" href="{{ route('movies') }}">MOVIES</a>
        </li>
        <li>
            <a class="link" href="{{ route('tv') }}">TV</a>
        </li>
        <li>
            <a class="link" href="{{ route('games') }}">GAMES</a>
        </li>
        <li>
            <a class="link" href="{{ route('collectibles') }}">COLLECTIBLES</a>
        </li>
        <li>
            <a class="link" href="{{ route('videos') }}">VIDEOS</a>
        </li>
        <li>
            <a class="link" href="{{ route('fans') }}">FANS</a>
        </li>
        <li>
            <a class="link" href="{{ route('news') }}">NEWS</a>
        </li>
        <li>
            <a class="link" href="{{ route('shop') }}">SHOP</a>
        </li>
      </ul>

    <!-- searchbar -->
      <div>Search bar</div>
    </div>
</header>