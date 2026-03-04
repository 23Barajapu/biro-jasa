@extends('admin.layouts.base')

@section('title', 'Login Admin')

@section('content')
<div class="auth-bg d-flex min-vh-100 justify-content-center align-items-center">
    <div class="row g-0 justify-content-center w-100">
        <div class="col-xl-4 col-lg-5 col-md-6">
            <div class="card auth-card shadow-lg border-0 overflow-hidden">
                <div class="card-body p-4 p-md-5">
                    <div class="text-center mb-4">
                        <a href="{{ url('/') }}" class="d-block auth-logo">
                            <img src="{{ asset('assets/images/logo/logo-01.png') }}" alt="BJ Mahkota" height="60" class="logo-dark">
                        </a>
                        <h4 class="fw-bold mt-4 mb-1">Selamat Datang Kembali!</h4>
                        <p class="text-muted">Masuk untuk mengelola Dashboard BJ Mahkota.</p>
                    </div>

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Masukkan email Anda">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required placeholder="Masukkan password Anda">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">Ingat Saya</label>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg shadow-sm fw-semibold" type="submit">Masuk Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center mt-4">
                <p class="text-muted mb-0">&copy; {{ date('Y') }} Biro Jasa Mahkota. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>

<style>
    .auth-bg {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    }
    .auth-card {
        border-radius: 1.25rem;
    }
    .btn-primary {
        background: #0046af;
        border-color: #0046af;
    }
    .btn-primary:hover {
        background: #00378a;
        border-color: #00378a;
    }
</style>
@endsection
