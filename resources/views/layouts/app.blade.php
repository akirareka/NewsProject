<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d3ebe7dadd.js" crossorigin="anonymous"></script>
    <!-- Fontawsome -->
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('article/css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('article/css/showarticle.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('article/css/article.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('article/css/article.css') }}" media="screen">
    <link rel="stylesheet" href="{{asset('/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('/css/home.css')}}">
    <link rel="stylesheet" href="{{asset('/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('/css/addadmin.css')}}">
    <link rel="stylesheet" href="{{asset('/css/editprofile.css')}}">
    <link rel="stylesheet" href="{{asset('/css/artikel.css')}}">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick/slick-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}" />



<body>
    <!-- START NAVIGATION BAR -->
    <nav class="navbar">
        <div class="container ">
            <a class="navbar-brand logo1" href="/"><img class="logo1" style="margin-right: 10px;"
                    src="/img/Group 73.png"></a>
            <form class="navbarsearch"action="/search" method="GET" >
                <input type="text" name="s" class="input" placeholder="Search" value="{{ request('s') }}">
                <button class="src">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
            <div style="margin-left:10px;">
                <a href="">
                    <img src="/img/Profil.png" alt="">
                </a>
            </div>
            @guest
            <!-- Kalau belum log in -->
            <div class="col">
                <div class="row">

                    @if (Route::has('login'))
                    <div class="col">
                        <a class="nav" href="{{ route('login') }}">{{ __('Login/Register') }}</a>
                    </div>
                    @endif
                </div>
            </div>

            @else
            <!-- <div class="col"><a href=""><img src="/img/Profil.png" style="margin-left: 10px;" alt=""></a></div> -->
            <!-- Kalau sudah log in -->
            <div class="col" style="margin-right: 0;">
                <a class="nav" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" type="button">
                    {{ Auth::user()->name }}<i style="font-size: 25px;"> </i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>

            </div>


            @if(Auth::user()->role=='Admin')
            <div class="col-2">
                <a href="/admin">Halaman admin</a>
            </div>
            @endif
            @endguest
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg">
        <div class="container collapse navbar-collapse nav justify-content-center">
            <ul class="navbar-nav nav2 ">
                <li class="nav-item  ">
                    <a class="navbar-brand" href="/">NEWS</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="/edukasi">EDUKASI</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="/kesehatan">KESEHATAN</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="/otomotif">OTOMOTIF</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="/sport">SPORT</a>
                </li>
                <li class="nav-item ">
                    <a class="navbar-brand" href="/teknologi">TEKNOLOGI</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                        style="font-size: 20px; padding:0; margin-top:3px;" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        LAINNYA
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Comming Soon</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Links kanan -->
    @guest


    @endguest

    </div>
    </div>
    </nav>
    <!-- END NAVIGATION BAR -->

    <!-- START MAIN -->

    <div >

                @yield('content')

    </div>

    <footer class="jumbotron-fluid " id="Footer">
        <div class="container">
            <div class="row">
                <div class="col" style="margin-top: 10px;">
                    <a>Contact</a>
                    <h3>pusris.phc@unpad.ac.id</h3>
                    <h3>(022) 84288828</h3>
                    <a>Location</a>
                    <h3>Kampus UNPAD Jatinangor Jalan Raya Bandung-Sumedang KM21 Jatinangor, 45363</h3>
                </div>
                <div class="col footer">
                <img style="margin-top: 40px;" src="/img/tw.png" alt="">
                        <img style="margin-top: 40px;" src="/img/ig.png" alt="">
                        <img style="margin-top: 40px;" src="/img/yt.png" alt="">
                        <img style="margin-top: 40px;" src="img/fb.png" alt="">

                </div>
            </div>
        </div>
    </footer>
    <!-- END MAIN -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- jquery + slick -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('css/slick/slick.min.js') }}"></script>
</body>

</html>
