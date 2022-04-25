<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Fontawsome -->
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('article/css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('article/css/showarticle.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('article/css/article.css') }}" media="screen">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick/slick-theme.css') }}"/>

    <style>
      body {
        background-color: #ededed;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }
      a {
        text-decoration: none;
        color: inherit;
      }
      a:hover {
        text-decoration: none;
        color: inherit;
        transition: inherit;
      }
      .nav {
        color: #ededed;
        font-size: 15px;
        transition: color .15s;
      }
      .nav:hover {
        color: #F2E03F;
      }
      footer {
        margin-top: auto;
      }
      .icon {
        background-color: #0f609f;
        padding: 17px;
        font-size: 60px;
        color: white;
        border-radius: 10px;
        width: 100px;
        height: 100px;
      }
      @yield('css')
    </style>

<body>
  <!-- START NAVIGATION BAR -->
  <nav class="bg-dark py-2">
    <div class="container">
      <div class="row d-flex justify-content-between align-items-center">
        <div class="col-6">
          <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-3">
              <a href="/">
                <img src="" alt="LOGO NEWSUPDATE" height=50>
              </a>
            </div>
            <!-- Links Kiri -->

            <div class="col-1">
              <a class="nav" href="#">Test</a>
            </div>
          </div>
        </div>

        <!-- Links kanan -->
        @guest
        <!-- Kalau belum log in -->
        <div class="col-2">
          <div class="row">
            @if (Route::has('login'))
            <div class="col">
              <a class="nav" href="{{ route('login') }}">{{ __('Login/Register') }}</a>
            </div>
            @endif
          </div>
        </div>

        @else
        <!-- Kalau sudah log in -->
        @if(Auth::user()->role=='Admin')
        <div class="col-3">
        <a href="/admin">Halaman admin</a>
        </div>
        @endif
        <div class="col-3">
          <a class="nav" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" type="button">
            {{ Auth::user()->name }}<i class="fa fa-user-circle mx-2" style="font-size: 25px;"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="/profile">Profile</a></li>
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
          </ul>
        </div>
        @endguest

      </div>
    </div>
  </nav>
  <!-- END NAVIGATION BAR -->

  <!-- START MAIN -->
  <div class="py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
        @yield('content')
        </div>
      </div>
    </div>
  </div>
  <!-- END MAIN -->

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- jquery + slick -->
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="{{ asset('css/slick/slick.min.js') }}"></script>
</body>
</html>