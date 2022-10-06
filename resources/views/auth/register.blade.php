@extends('layouts.guest')
@section('title','Register')

@section("content")
<div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Registration</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>Registration</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="login registration section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="form-head">
                        <form action="{{ route('register') }}" method="post">
                            <div class="socila-login">
                                <ul class="d-flex justify-content-between">
                                    <li class="mb-0"><a href="javascript:void(0)" class="facebook"><i class="lni lni-facebook-original"></i>Import
                                    From Facebook</a></li>
                                    <li class="mb-0"><a href="javascript:void(0)" class="google"><i class="lni lni-google"></i>Import From Google
                                    Plus</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="alt-option">
                                <span>Or</span>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input name="password" type="text">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="password">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input name="password" type="password">
                            </div>
                            <div class="check-and-pass">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
                                            <label class="form-check-label">Agree to our <a href="javascript:void(0)">Terms and
                                            Conditions</a></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button">
                                <button type="submit" class="btn">Registration</button>
                            </div>
                            <p class="outer-link">Already have an account? <a href="{{ route('login') }}"> Login Now</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection