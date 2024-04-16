<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SDU Diary</title>

        <link rel="stylesheet" href="{{asset('../css/about_us.css')}}">

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

    <div class="card-text">
        <p>
            Since 1996 SDU University has been one of the leading and innovative academic institutions in Kazakhstan that improves educational program through new ideas and creativity.<br/><br/>
            The SDU Diary is a comprehensive digital planner designed to assist freshmen and students at SDU in organizing their academic and personal schedules.<br/><br/>
            SDU University is committed to fostering a diverse and inclusive community that values and respects individuals of all backgrounds. We believe that diversity enriches the educational experience and promotes a culture of openness and acceptance.<br/>
            At SDU, we celebrate diversity in all its forms, including race, ethnicity, nationality, gender identity, age, religion, and socio-economic background. We recognize that each person brings unique perspectives, experiences, and talents to our community, and we are committed to creating an inclusive environment that embraces and harnesses these differences.
        </p>
        <image src = "{{url('/image/image 139.png')}}" alt='logo' class="image-sdu">
    </div>

    </body>
</html>
