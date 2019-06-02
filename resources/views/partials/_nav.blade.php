{{--<!-- Default Bootstrap Navbar -->--}}
{{--<nav class="navbar navbar-default">--}}
{{--  <div class="container-fluid">--}}
{{--    <!-- Brand and toggle get grouped for better mobile display -->--}}
{{--    <div class="navbar-header">--}}
{{--      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">--}}
{{--        <span class="sr-only">Toggle navigation</span>--}}
{{--        <span class="icon-bar"></span>--}}
{{--        <span class="icon-bar"></span>--}}
{{--        <span class="icon-bar"></span>--}}
{{--      </button>--}}
{{--      <a class="navbar-brand" href="/">Software Testing Tools</a>--}}
{{--    </div>--}}

{{--    <!-- Collect the nav links, forms, and other content for toggling -->--}}
{{--    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
{{--      <ul class="nav navbar-nav">--}}
{{--        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>--}}
{{--        <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog</a></li>--}}
{{--        <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li>--}}
{{--        <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>--}}
{{--      </ul>--}}
{{--      <ul class="nav navbar-nav navbar-right">--}}
{{--        @if (Auth::check())--}}
{{--        --}}
{{--        <li class="dropdown">--}}
{{--          <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }} <span class="caret"></span></a>--}}
{{--          <ul class="dropdown-menu">--}}
{{--            <li><a href="{{ route('posts.index') }}">Posts</a></li>--}}
{{--            <li><a href="{{ route('categories.index') }}">Categories</a></li>--}}
{{--            <li><a href="{{ route('tags.index') }}">Tags</a></li>--}}
{{--            <li role="separator" class="divider"></li>--}}
{{--            <li><a href="{{ route('logout') }}">Logout</a></li>--}}
{{--          </ul>--}}
{{--        </li>--}}
{{--        --}}
{{--        @else--}}
{{--        --}}
{{--          <li><a href="{{ route('login') }}">Login</a></li>--}}

{{--        @endif--}}

{{--      </ul>--}}
{{--    </div><!-- /.navbar-collapse -->--}}
{{--  </div><!-- /.container-fluid -->--}}
{{--</nav>--}}
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="./" class="navbar-brand">
        Software Testing Tools
      </a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav navbar-right">
        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
        <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About</a>
{{--          <a href="/about" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>--}}
{{--          <ul class="dropdown-menu">--}}
{{--            <li><a href="#">Mission</a></li>--}}
{{--            <li><a href="#">Vision</a></li>--}}
{{--            <li><a href="#">Careers</a></li>--}}
{{--          </ul>--}}
        </li>
        <li>
          <a href="#">Products</a>
        </li>
        <li>
          <a href="#">Services</a>
        </li>
        <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
        @if (Auth::check())

          <li class="dropdown">
            <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('posts.index') }}">Posts</a></li>
              <li><a href="{{ route('categories.index') }}">Categories</a></li>
              <li><a href="{{ route('tags.index') }}">Tags</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
          </li>

        @else
          <li class="{{ Request::is('auth/login') ? "active" : "" }}"><a href="/auth/login">Login</a></li>
        @endif
      </ul>
    </nav>
  </div>
</header>
<hr>