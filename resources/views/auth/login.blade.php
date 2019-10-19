@extends('main')
@section('content')
<div class="sc-signin-wrapper">
    <div class="sc-signin-box">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <div>
                    <i class="tx-130 icon-SyrianCloud"></i>
                    <h2 class="tx-36 font-SyrianCloud">SyrianCloud</h2>

                    <hr>
                    <p>Dont have an account? <br> <a href="{{route('register')}}">Sign up Now</a></p>
                </div>
            </div>
            <div class="col-lg-7">
                <h4 class="tx-gray-800 mg-b-25">Signin to Your Account</h4>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
            <div class="form-group">
                    <label class="form-control-label">Email:</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  placeholder="Enter your email address" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-group">
                    <label class="form-control-label">Password:</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div><!-- form-group -->
                @if (Route::has('password.request'))
                <a  href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif

                <button type="submit" class="btn btn-block">Sign In</button>

            </div><!-- col-7 -->
        </form>
        </div><!-- row -->
        <p class="tx-center tx-white-5 tx-12 mg-t-15">Copyright &copy; 2020. All Rights Reserved. SyrianCloud</p>
    </div><!-- signin-box -->
</div><!-- sc-signin-wrapper -->
@endsection


