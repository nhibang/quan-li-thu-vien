@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h2 class="mb-4 text-center">{{ __('Đăng ký tài khoản') }}</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <input id="name" type="text" class="form-control bg-white @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Họ và tên">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input id="username" type="text" class="form-control bg-white @error('username') is-invalid @enderror" name="username"
                        value="{{ old('username') }}" autocomplete="username" autofocus placeholder="Tên đăng nhập">

                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <input id="password" type="password" class="form-control bg-white @error('password') is-invalid @enderror"
                        name="password" autocomplete="new-password" placeholder="Mật khẩu">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input id="email" type="email" class="form-control bg-white @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" autocomplete="email"
                        placeholder="Địa chỉ email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary w-100">
                            {{ __('Đăng ký') }}
                        </button>
                    </div>
                </div>
            </form>

            <div class="text-center mt-3">
                Bạn đã có tài khoản ?
            </div>

            <div>
                <a type="button" class="btn btn-secondary w-100 mt-3 bordered" href="/login">
                    Đăng nhập
                </a>
            </div>
        </div>
    </div>
</div>
@endsection