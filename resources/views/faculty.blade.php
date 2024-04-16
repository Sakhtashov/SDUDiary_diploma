<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SDU Diary</title>

        <link rel="stylesheet" href="{{asset('../css/faculty.css')}}">

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

    <div class="fac-main">
        <div class="fac-card">
            <img class="name-fac" src="{{url('/image/image 17.png')}}" alt="">
            <p>SDU Business School</p>
            <div class="line">
                <img class="navig" src="{{url('/image/navigation.png')}}" alt="">
            </div>
        </div>
        <div class="fac-card">
            <img class="name-fac" src="{{url('/image/image 18.png')}}" alt="">
            <p>SDU Engineering and Natural</p>
            <div class="line">
                <img class="navig" src="{{url('/image/navigation.png')}}" alt="">
            </div>
        </div>
        <div class="fac-card">
            <img class="name-fac" src="{{url('/image/image 19.png')}}" alt="">
            <p>SDU Edu & Humanities</p>
            <div class="line">
                <img class="navig" src="{{url('/image/navigation.png')}}" alt="">
            </div>
        </div>
        <div class="fac-card">
            <img class="name-fac" src="{{url('/image/image 20.png')}}" alt="">
            <p>SDU Law & Social</p>
            <div class="line">
                <img class="navig" src="{{url('/image/navigation.png')}}" alt="">
            </div>
        </div>
    </div>

    </body>
</html>
