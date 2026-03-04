<!DOCTYPE html>
<html lang="en" @yield('html_attribute')>
<head>
    <!-- Title Meta -->
    <meta charset="utf-8"/>
    <title> @yield('title') | Lahomes - Real Estate Management Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="A fully responsive premium admin dashboard template, Real Estate Management Admin Template"/>
    <meta name="author" content="Techzaa"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="shortcut icon" href="{{ asset('assets/admin') }}/images/favicon.ico">

    @yield('css')

    @yield('extra_css')

    @include('admin.partials.head-css')

</head>
<body @yield('body_attribute')>

@yield('preloader')

@yield('content')

@yield('javascript')

@include('admin.partials.vendor-scripts')

@yield('extra_javascript')

</body>
</html>
