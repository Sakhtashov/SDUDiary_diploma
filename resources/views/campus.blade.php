<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SDU Diary</title>

        <link rel="stylesheet" href="{{asset('../css/campus.css')}}">

         <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    </head>
    <body>

    <div class = 'nav'>
                <nav class = 'menu'>
                    <image src = "{{url('/image/logo.png')}}" alt='logo' class="logo">
                    <div class = "center">
                        <input type="text" id="search" placeholder="Search">
                        <div class = "centerDown">
                            <ul>
                                <li class="menu-item">
                                    <a href="#" onclick="window.location.href='{{route('index')}}'">HOME</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#"  onclick="window.location.href='{{route('about_us')}}'">ABOUT US</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" onclick="window.location.href='{{route('clubs')}}'">CLUBS</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" onclick="window.location.href='{{route('contact')}}'">CONTACT</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">QUOTE</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class = 'rightSide'>
                        <image style= "width: 90px; height: 90px; padding-right: 67px" src ="{{url('/image/acc.png')}}" alt="auth" id="authIcon">
                            @auth

                        <p>{{auth()->user()->email}} </p>
                        @endauth
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal" id='showWindow'>
                            Sign in
                        </button>
                    </div>
                </nav>
    </div>

    <div class="main">
        <div class="card">
            <p><a href="#" onclick="window.location.href='{{route('index')}}'">ABOUT SDU</a></p>
        </div>
        <div class="card">
            <p><a href="#" onclick="window.location.href='{{route('faculty')}}'">FACULTY</a></p>
        </div>
        <div class="card">
            <p><a href="#" onclick="window.location.href='{{route('campus')}}'">CAMPUS</a></p>
        </div>
    </div>

    <h1>Campus</h1>
    <div class="campus">
        <img src="{{url('/image/image 127.png')}}" alt="">
        <img src="{{url('/image/image 128.png')}}" alt="">
        <img src="{{url('/image/image 129.png')}}" alt="">
    </div>

    <h1>Library</h1>
    <div class="campus">
        <img src="{{url('/image/image 126.png')}}" alt="">
        <img src="{{url('/image/image 130.png')}}" alt="">
        <img src="{{url('/image/image 125.png')}}" alt="">
    </div>

    <h1>Canteen</h1>
    <div class="campus">
        <img src="{{url('/image/image 131.png')}}" alt="">
        <img src="{{url('/image/image 133.png')}}" alt="">
        <img src="{{url('/image/image 132.png')}}" alt="">
    </div>

    <p class="campus-title">When your</p>
    <div class="campus-title-img">
        <img src="{{url('/image/image 134.png')}}" alt="">
        <p class="vis" >vision</p>
    </div>
    <div class="campus-title-img1">
        <p>is clear</p>
        <img src="{{url('/image/image 135.png')}}" alt="">
    </div>
    <p class="cant">strategy</p>
    <div class="campus-title-img">
        <img src="{{url('/image/image 136.png')}}" alt="">
        <h1>is easy</h1>
    </div>

    </body>
</html>
