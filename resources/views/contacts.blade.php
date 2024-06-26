<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SDU Diary</title>

        <link rel="stylesheet" href="{{asset('../css/contacts.css')}}">

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
    <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50035.770355568144!2d76.7076648522942!3d43.20876726248611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38834f7675d8a6c3%3A0x7b7d14aec270c056!2sSDU%20University!5e0!3m2!1sen!2skz!4v1713281082733!5m2!1sen!2skz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="contact-bottom">
        <p class="contact-title">
            Ask us a question
        </p>
        <!-- <div class="call-mail">
            <image src = "{{url('/image/Ringer Volume.png')}}" alt='logo' class="call">
            <p>+7 (727) 307-95-65</p>
        </div> -->
        <div class="call-mail">
            <img  src="{{url('/image/Vector (1).png')}}" class="call" >
            <img  src="{{url('/image/Почта.png')}}" alt="">
        </div>
        <div class="follow">
            <!-- <img  src="{{url('/image/VK.png')}}" class="call" > -->
        </div>
    </div>

    </body>
</html>
