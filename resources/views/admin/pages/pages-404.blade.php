@extends('admin.layouts.base')

@section('title', 'Page Not Found - 404')

@section('body_attribute', 'class="authentication-bg"')

@section('content')
<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="card auth-card">
                    <div class="card-body p-0">
                        <div class="row align-items-center g-0">
                            <div class="col">
                                <div class="p-4">
                                    <div class="mx-auto mb-4 text-center">
                                        <div class="mx-auto text-center auth-logo">
                                            <a class="logo-dark" href="{{ url('/admin/') }}">
                                                <img alt="logo dark" height="32"
                                                     src="{{ asset('assets/admin') }}/images/logo-dark.png"/>
                                            </a>
                                            <a class="logo-light" href="{{ url('/admin/') }}">
                                                <img alt="logo light" height="28"
                                                     src="{{ asset('assets/admin') }}/images/logo-light.png"/>
                                            </a>
                                        </div>
                                        <img alt="auth" class="mt-5 mb-3" height="250"
                                             src="{{ asset('assets/admin') }}/images/404.svg">
                                        <h2 class="fs-22 lh-base">Page Not Found !</h2>
                                        <p class="text-muted mt-1 mb-4">The page you're trying to reach seems to have
                                            gone <br/> missing in the digital wilderness.</p>
                                        <div class="text-center">
                                            <a class="btn btn-danger" href="{{ url('/admin/') }}">Back to Home</a>
                                        </div>
                                        </img></div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>
@endsection

@section('extra_javascript')
