
@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4>Login Petugas BPBD</h4>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email"
                                class="form-control"
                                value="{{ old('email') }}" required>
                        </div>

                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password"
                                class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <input type="checkbox" name="remember">
                            <label>Ingat Saya</label>
                        </div>

                        <button type="submit"
                            class="btn btn-primary w-100">
                            Login
                        </button>

                    </form>

                    <p class="text-center mt-3">
                        Belum punya akun?
                        <a href="{{ route('register') }}">Register</a>
                    </p>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
