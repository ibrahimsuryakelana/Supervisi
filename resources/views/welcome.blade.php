<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color:LightGray;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif -->
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    Selamat Datang
                </div>
            </div>

            <!-- <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title">Silahkan Login</h3>
                    <p class="card-text">ADMIN</p>
                    <h6 class="card-text">admin@smkwikrama.com --- 12345678</H6>
                    <p class="card-text">KURIKULUM</p>
                    <h6 class="card-text">kurikulum@smkwikrama.com --- 12345678</H6>
                    <p class="card-text">SUPERVISOR</p>
                    <h6 class="card-text">supervisor@smkwikrama.com --- 12345678</H6>
                    <p class="card-text">KEPALA SEKOLAH</p>
                    <h6 class="card-text">kepsek@smkwikrama.com --- 12345678</H6>
                    <p class="card-text">GURU</p>
                    <h6 class="card-text">guru@smkwikrama.com --- 12345678</H6>
                    <button class="btn btn-secondary btn-lg btn-block"><a href="{{ route('login') }}">Login</button>
                </div>
            </div> -->

                <!-- <div class="links">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div> -->
            </div>
        </div>
    </body>
</html>
