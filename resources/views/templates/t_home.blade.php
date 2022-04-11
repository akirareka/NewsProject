<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('article/css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('article/css/showarticle.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('article/css/article.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('article/js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('article/nicepage.js') }}" defer=""></script>
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
    </style>
  </head>

<body>
  <!-- START NAVIGATION BAR -->
  <nav class="bg-dark py-2">
    <div class="container">
      <div class="row d-flex justify-content-between align-items-center">
        <div class="col-6">
          <div class="row align-items-center">
            <!-- Logo -->
            <div class="col">
              <a href="/">
                <img src="{{ asset('images/Logo_NoBG.png') }}" alt="Logo I'm Okay!" height=50>
              </a>
            </div>
            <!-- Links Kiri -->
            <div class="col">
              <a class="nav" href="{{ url('/') }}">Beranda</a>
            </div>
            <div class="col-4">
              <a class="nav" href="#">Self-Healing Program</a>
            </div>
            <div class="col">
              <a class="nav" href="{{ url('/artikel') }}">Artikel</a>
            </div>
            <div class="col">
              <a class="nav" href="#">Konseling</a>
            </div>
          </div>
        </div>

        <!-- Links kanan -->
        <!-- Kalau belum log in -->
        @guest
        <div class="col-2">
          <div class="row">
            @if (Route::has('login'))
            <div class="col">
              <a class="nav" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>
            @endif
            @if (Route::has('register'))
            <div class="col">
              <a class="nav" href="{{ route('register') }}">{{ __('Register') }}</a>
            </div>
            @endif
          </div>
        </div>

        <!-- Kalau sudah log in -->
        @else
        <div class="col-1">
          <a class="nav" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" type="button">
            {{ Auth::user()->name }}<i class="fa fa-user-circle mx-2" style="font-size: 25px;"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Profile</a></li>
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

  <main class="py-4">
    @yield('content')
  </main>

  <!-- START FOOTER -->
  <footer class="text-center text-lg-start bg-dark">
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3">
        <!-- Logo -->
        <div class="col-8 mx-auto mb-4">
          <img src="{{ asset('images/Logo_NoBG.png') }}" alt="Logo I'm Okay!" width=300>
        </div>
        <!-- Kolom kanan 1 -->
        <div class="col-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            <a href="#!" class="nav">Help & Support</a>
          </h6>
          <h6 class="text-uppercase fw-bold mb-4">
            <a href="#!" class="nav">Cara Penggunaan</a>
          </h6>
        </div>
        <!-- Kolom kanan 2 -->
        <div class="col-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            <a href="#!" class="nav">About Us</a>
          </h6>
          <p>
            <a href="#!" class="nav">Tentang Kami</a>
          </p>
          <p>
            <a href="#!" class="nav">Kontak Kami</a>
          </p>
        </div>
      </div>
    </div>

    <!-- Footer bawah -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom text-light">
      <!-- Copyright -->
      <div class="me-5 d-none d-lg-block">
        <span>Hak Cipta © 2021 I'm Okay!</span>
      </div>
      <!-- Social media -->
      <div>
        <span class="me-4">Follow us on</span>
        <a href="" class="me-4">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="" class="me-4">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </section>
  </footer>
  <!-- END FOOTER -->

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>