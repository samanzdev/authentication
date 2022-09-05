@extends('layouts.master')
@section('pageTitle','Register')
@section('content')
    <div class="panel">
        <div class="panel__form-wrapper">
            <ul class="panel__headers">
                <li class="panel__header active"><a class="panel__link" role="button">Register</a>
                </li>
            </ul>

            <div class="panel__forms">

                <!-- register Form -->
                <form class="form panel__login-form" id="register-form" method="post" action="{{ route('auth.registerForm') }}">
                    @csrf
                    <div class="form__row">
                        <input type="text" id="full_name" class="form__input" name="full_name" data-validation="full_name" required>
                        <span class="form__bar"></span>
                        <label for="full_name" class="form__label">FullName</label>
                        <span class="form__error"></span>
                    </div>
                    <div class="form__row">
                        <input type="text" id="email" class="form__input" name="email" data-validation="email"
                               data-error="Invalid email address." required>
                        <span class="form__bar"></span>
                        <label for="email" class="form__label">E-mail</label>
                        <span class="form__error"></span>
                    </div>
                    <div class="form__row">
                        <input type="password" id="password" class="form__input" name="password"
                               required>
                        <span class="form__bar"></span>
                        <label for="password" class="form__label">Password</label>
                        <span class="form__error"></span>
                    </div>
                    <div class="form__row">
                        <input type="password" id="password_confirmation" class="form__input" name="password_confirmation"
                               required>
                        <span class="form__bar"></span>
                        <label for="password_confirmation" class="form__label">PasswordConfirmation</label>
                        <span class="form__error"></span>
                    </div>
                    <div class="form__row">
                        <input type="submit" class="form__submit" value="Register !">
                        <a href="{{ route('auth.login') }}" class="form__retrieve-pass" role="button">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
