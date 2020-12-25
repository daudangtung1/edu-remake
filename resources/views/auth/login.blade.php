@extends('layouts.master')
@section('content')
    <div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h3>Login</h3>
                </div>
            </div>
        </div>
    </div>
    <section class="login-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <form id="login-form" method="post">
                        @csrf
                        <div class="heading">Login</div>
                        <div class="left">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="name" class="form-control" placeholder="Username">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>

                        <div class="right">
                            <div class="connect">Connect with</div>
                            <a href="#" class="facebook"><i class="icofont-facebook"></i> Facebook</a>
                            <a href="#" class="twitter"><i class="icofont-twitter"></i> Twitter</a>
                            <a href="#" class="google-plus"><i class="icofont-google-plus"></i> Google Plus</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
