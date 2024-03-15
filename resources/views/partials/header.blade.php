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
            <a class="link" href="#">CHARACTERS</a>
        </li>
        <li>
            <a class="link" href="{{ route('comics') }}">COMICS</a>
        </li>
        <li>
            <a class="link" href="#">MOVIES</a>
        </li>
        <li>
            <a class="link" href="#">TV</a>
        </li>
        <li>
            <a class="link" href="#">GAMES</a>
        </li>
        <li>
            <a class="link" href="#">COLLECTIBLES</a>
        </li>
        <li>
            <a class="link" href="#">VIDEOS</a>
        </li>
        <li>
            <a class="link" href="#">FANS</a>
        </li>
        <li>
            <a class="link" href="#">NEWS</a>
        </li>
        <li>
            <a class="link" href="#">SHOP</a>
        </li>
      </ul>

    <!-- searchbar -->
      <div>Search bar</div>
    </div>
</header>