@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h2 class="mb-4 text-center">{{ __('Đăng nhập') }}</h2>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <input id="username" type="username" class="form-control bg-white @error('username') is-invalid @enderror"
                        name="username" value="{{ old('username') }}" required autocomplete="username" autofocus
                        placeholder="Tên đăng nhập">

                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input id="password" type="password" class="form-control bg-white @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Mật khẩu">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary w-100">
                            {{ __('Đăng nhập') }}
                        </button>

                    </div>
                </div>
            </form>              
            
            <div class="row">
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Quên mật khẩu?') }}
                </a>
                @endif
            </div>

            <div>
                <a type="button" class="btn btn-secondary w-100 mt-3 bordered" href="/register">
                    Đăng ký
                </a>
            </div>
        </div>
    </div>
</div>
@endsection