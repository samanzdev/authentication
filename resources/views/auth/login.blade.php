@extends('layouts.master')
@section('pageTitle','Login')
@section('content')
    <div class="panel h-470">
        <div class="panel__form-wrapper">
            <ul class="panel__headers">
                <li class="panel__header active"><a class="panel__link" role="button">Login</a>
                </li>
            </ul>

            <div class="panel__forms">

                <!-- register Form -->
                <form class="form panel__login-form" id="login-form" method="post" action="{{ route('auth.loginForm') }}">
                    @csrf
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
                        <input type="submit" class="form__submit" value="Get Started!">
                        <a href="{{ route('auth.register') }}" class="form__retrieve-pass" role="button">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
