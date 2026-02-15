<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', 'FEASTRIA | A Symphony of Flavors')</title>
    @include('front.partials.style')
</head>

<body class="bg-background-light dark:bg-background-dark text-[#181311] dark:text-white transition-colors duration-300">
    @include('front.partials.header')

    <main>
        @yield('content')
    </main>

    @include('front.partials.footer')
</body>

</html>
