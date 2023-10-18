<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.bunny.net"> -->
    <!-- <link href="https://fonts.bunny.net/css?family=Aleo" rel="stylesheet"> -->

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <style>
        body{
             font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-image: url('https://wallpaperaccess.com/full/1294117.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            max-width: 100%;
        }
        #header ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
          
        }
        #header li {
            display: inline-block; 
        }
        #header li a {
            display: inline-block;
            color: rgb(9, 9, 9);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        #header li a:hover {
            background-color: skyblue;
        }
      
    </style>
    <div id="header">

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-skyblue shadow-sm">
   
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    <ul class="navbar-nav me-auto">
                 
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/">{{ __('Trang chủ') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/introduce">{{ __('Giới thiệu') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/manageusers">{{ __('Quản lý người dùng') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/manageBook">{{ __('Quản lý sách') }}</a>
                        </li>

                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                 
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Đăng xuất') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

    

                </div>
            </div>

        

        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    </div>
</body>
</html>
