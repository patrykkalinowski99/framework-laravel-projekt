<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Wypożyczalnia yachtów</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="/css/main.css" red="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@900&family=Montserrat:wght@500&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
        {{-- bootstrap --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
  <!-- Navbar -->
        <!-- Navigation-->
        <header>
            <ul class="nav header-text">
                <li class="nav-item">
                  <a class="nav-link active" href="{{ route('index') }}">
                <img src="images/logo.png" alt="logo" class="nav-logo">
                </a>
                </li>
                <li class="nav-item mt-2">
                  <span class="nav-header-upper-text">Uniwersytet w Białymstoku</span>
                  <br>
                  <span class="nav-header-lower-text">Konstantego Ciołkowskiego 1M</span>
                </li>
                <li class="nav-item mt-2">
                    <span class="nav-header-upper-text">+48 123 456 789</span>
                    <br>
                    <span class="nav-header-lower-text">sekretariat</span>
                </li>
                <li class="nav-item mt-2">
                    <span class="nav-header-upper-text">yacht@uwb.edu.pl</span>
                    <br>
                    <span class="nav-header-lower-text">wynajmij@yacht.pl</span>
                </li>
              </ul>
        </header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary justify-content-center">
                    <form class="d-flex">
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li>
                                        <a class="nav-link" href="{{ route('login') }}">Logowanie</a>
                                    </li>
                                @endif
    
                                @if (Route::has('register'))
                                    <li>
                                        <a class="nav-link" href="{{ route('register') }}">Rejestracja</a>
                                    </li>
                                @endif
                            @else

                                @if (Auth::user()->hasRole('admin'))
                                <a class="nav-link" href="/panel">Panel administratora
                                    </a>
                                @endif
                                
                                <a class="nav-link" href="{{ route('index') }}">Wypożycz łódź</a>

                                <a class="nav-link" href="/profil/{{ Auth::user()->id }}">Moje konto</a>

                                <a class="nav-link" href="{{ route('showcart') }}">Koszyk</a> 

                                <a class="nav-link" href="/logout">Wyloguj</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @endguest
                        </ul>
                    </form>
        </nav>
        <!-- Section-->
        <img src="images/bg-yacht.png" alt="yacht" class="bg-yacht-image">
        <div class="content-padding">
                @yield('content')
        </div>
        <!-- Footer-->
        <footer class="bg-dark">
            <div class="container"><p class="text-center text-white">Projekt wykonał: Patryk Kalinowski 80224</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
