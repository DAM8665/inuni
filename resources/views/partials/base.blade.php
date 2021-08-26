<!doctype html>
<html lang="en">
<head>
    <title>InUni | {{$title}}</title>
    @include('partials.meta')
    @include('partials.style')
</head>
<body>
@include('partials.preloader')
@include('partials.transition')
<div class="smooth-scroll">
    <div class="section-wrapper" data-scroll-section>
    @include('partials.aside')
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
    </div>
</div>
@include('partials.scripts')
</body>
</html>
