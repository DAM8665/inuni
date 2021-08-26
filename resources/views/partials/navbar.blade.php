<nav class="navbar">
    <figure><img src="{{asset('public')}}/images/title-shape.png" onclick="location.href='{{route('index')}}'" alt="Image"></figure>
    <!-- end logo -->
    <div class="custom-menu">
{{--        <ul>--}}
{{--            <li><a href="#">Eng</a></li>--}}
{{--            <li><a href="#">Fa</a></li>--}}
{{--        </ul>--}}
    </div>
    <!-- end custom-menu -->
    <div class="site-menu" style="margin-right: auto">
        <ul>
            <li><a href="{{route('index')}}">Home</a></li>
            <li><a href="{{route('universities.index')}}">Universities</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
    </div>
    <!-- end site-menu -->
    <div class="hamburger-menu">
        <svg class="hamburger" width="30" height="30" viewBox="0 0 30 30">
            <path class="line line-top" d="M0,9h30"/>
            <path class="line line-center" d="M0,15h30"/>
            <path class="line line-bottom" d="M0,21h30"/>
        </svg>
    </div>
    <!-- end hamburger-menu -->
    <div class="navbar-button"><a href="{{route('auth')}}">SIGN IN</a></div>
    <!-- end navbar-button -->
</nav>
