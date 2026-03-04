@extends('admin.layouts.base')

@section('title', 'Maintanance')

@section('body_attribute', 'class="authentication-bg"')

@section('content')
<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="card auth-card">
                    <div class="card-body p-0">
                        <div class="row align-items-center g-0">
                            <div class="col-lg-4 d-none d-lg-inline-block border-end">
                                <div class="auth-page-sidebar">
                                    <img alt="auth" class="img-fluid"
                                         src="{{ asset('assets/admin') }}/images/maintenance.svg"/>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="p-4">
                                    <div class="mx-auto mb-5 text-center auth-logo">
                                        <a class="logo-dark" href="{{ url('/admin/') }}">
                                            <img alt="logo dark" height="32"
                                                 src="{{ asset('assets/admin') }}/images/logo-dark.png"/>
                                        </a>
                                        <a class="logo-light" href="{{ url('/admin/') }}">
                                            <img alt="logo light" height="28"
                                                 src="{{ asset('assets/admin') }}/images/logo-light.png"/>
                                        </a>
                                    </div>
                                    <h2 class="fw-bold text-center lh-base">We are currently performing maintenance</h2>
                                    <p class="text-muted text-center mt-1 mb-4">We're making the system more awesome.
                                        We'll be back shortly.</p>
                                    <div class="text-center">
                                        <a class="btn btn-danger" href="#">Contact Us</a>
                                    </div>
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
