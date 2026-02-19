<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body class="{{ $bodyClass ?? '' }}">

    @yield('content')

    <div id="overlay_every-where" data-tmp-cursor="md text-black dark:text-white opacity-10" data-tmp-cursor-icon="fa-regular fa-x fa-fw"></div>

    @include('partials.loader')

    @include('partials.scripts')
</body>

</html>
