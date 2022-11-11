<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('template') }}/assets/img/logo.png" alt="">
        <span>{{ config('app.name') }}</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          @foreach ($menus as $menu)
          <li><a class="nav-link scrollto active" href="{{ $menu =='Blog' ? route('blog') : route('home') }}#{{ Str::slug($menu) }}">{{ $menu }}</a></li>
          @endforeach
          
          <li><a class="getstarted scrollto" href="{{ route('home') }}#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>