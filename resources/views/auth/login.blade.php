@extends('layouts.guest')
@section('title','Login')
@section('content')

<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Login</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html">Home</a></li>
                    <li>Login</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="login section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <div class="form-head">
                    <h4 class="title">Login</h4>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Username or email</label>
                            <input name="email" type="email" id="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password">
                        </div>
                        <div class="check-and-pass">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
                                        <label class="form-check-label">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <a href="javascript:void(0)" class="lost-pass">Lost your password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="button">
                            <button type="submit" class="btn">Login Now</button>
                        </div>
                        <div class="alt-option">
                            <span>Or</span>
                        </div>
                        <div class="socila-login">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="lni lni-facebook-original"></i>Login With
                                Facebook</a></li>
                                <li><a href="javascript:void(0)" class="google"><i class="lni lni-google"></i>Login With Google
                                Plus</a>
                                </li>
                            </ul>
                        </div>
                        <p class="outer-link">Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection