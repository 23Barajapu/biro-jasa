@extends('admin.layouts.base')

@section('html_attribute')
@endsection

@section('title')
@yield('title')
@endsection

@section('extra_css')
@yield('extra_css')
@endsection

@section('body_attribute')
@endsection

@section('preloader')
@endsection

@section('content')

<div class="wrapper">

    @include('admin.partials.topbar')
    @include('admin.partials.main-nav')

    <div class="page-content">

        <div class="container-fluid">

            @yield('page_content')

        </div>

        @include('admin.partials.footer')

    </div>

     @yield('modal')

</div>

@endsection

@section('extra_javascript')
@yield('extra_javascript')
@endsection
