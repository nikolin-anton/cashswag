@extends('layouts.app')

@section('content')
<div class="client-content" style="background: rgb(243, 243, 246);">
    <div class="auth-page">
        <div class="auth-page__container">
            <div class="auth-page__title-wrapper">
                <h1 class="auth-page__title">Login to your personal account</h1>
                <h2 class="auth-page__subtitle">Enter email and password</h2>
            </div>
            <div class="form-card">
                <div class="form-card__cover form-card__cover--auth"><h2 class="form-card__title">Enter your details</h2></div>
                <div class="auth-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h3 class="auth-form__title">Registration</h3>
                        <div class="form-input">
                            <label class="form-input__label">Enter your email</label>
                            <input id="email" type="email" class="form-input__control form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="form-input__error-text invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-input">
                            <label class="form-input__label">Enter password</label>
                            <input id="password" type="password" class="form-input__control form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <div class="form-input__error-text"></div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                            @enderror
                        </div>
                        <div class="form-input">
                            <label class="form-input__label">Enter your password again</label>
                            <input id="password-confirm" type="password" class="form-input__control form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <button type="submit" class="button auth-form__button">{{ __('Sing up') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
