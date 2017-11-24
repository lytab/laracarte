 <nav class="navbar navbar-expand-md navbar-dark static-top bg-dark">
      <a class="navbar-brand" href="{{route('home_path')}}">Laracarte</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item {{set_active_route('home_path')}}">
            <a class="nav-link" href="{{route('home_path')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{set_active_route('about_path')}}" href="{{route('about_path')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Artisans</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
             
              <a class="dropdown-item" target="_blank" href="http://laravel.com">Laravel.com</a>
              <a class="dropdown-item" target="_blank" href="http://laravel.io">Laravel.io</a>
              <a class="dropdown-item" target="_blank" href="http://laracasts.com">Laracasts</a>
              <a class="dropdown-item" target="_blank" href="http://larajobs.com">Larajobs</a>
              <a class="dropdown-item" target="_blank" href="http://laravel-news.com">Laravel News</a>
              <a class="dropdown-item" target="_blank" href="http://larachat.co">Larachat</a>
            </div>
            <ul class="dropdown-menu">
            <li><a target="_blank" href="http://laravel.com">Laravel.com</a></li>
            <li><a target="_blank" href="http://laravel.io">Laravel.io</a></li>
            <li><a target="_blank" href="http://laracasts.com">Laracasts</a></li>
            <li><a target="_blank" href="http://larajobs.com">Larajobs</a></li>
            <li><a target="_blank" href="http://laravel-news.com">Laravel News</a></li>
            <li><a target="_blank" href="http://larachat.co">Larachat</a></li>
          </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav   pull-right">
        <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item ">
            <a class="nav-link" href="{{route('register')}}">Register <span class="sr-only">(current)</span></a>
          </li>
        </ul>
    {{-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>--}}
      </div>
    </nav>