@extends('admin.layouts.master')
@section('admin_content')






    <div class="mn-bx login-pg">
        <div class="header">
            <div class="row header-mn-row align-items-center">
                <div class="col-5">
                    <div class="lft">
                        <img src="{{ asset('backend/images/vemdr_header_logo.png') }}" alt="Logo">
                    </div>
                </div>
                <div class="col-7">
                    <div class="rght"></div>
                </div>
            </div>
        </div>
        <div class="mn-cntnt">
            <div class="logo">
                <img src="{{ asset('backend/images/cbt_logo.png') }}" alt="Logo">
            </div>
            <div class="small-white-bx">
                <div class="small-white-bx-cntnt">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1>Login</h1>
                        <input id="email" type="email" placeholder="Enter your email" class="cmn-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                         @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input id="password" type="password"  placeholder="Enter your password" class="cmn-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                         @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="submit" value="Login" class="btn orange-btn login-btn">
                    </form>
                </div>
            </div>
        </div>
    </div>




   
@endsection