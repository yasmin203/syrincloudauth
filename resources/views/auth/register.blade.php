@extends('main')
@section('content')

<div class="sc-signup-wrapper">
    <div class="sc-signup-box">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <div>
                    <i class="tx-130 icon-SyrianCloud"></i>
                    <h2 class="tx-36 font-SyrianCloud">SyrianCloud</h2>
                    <hr>
                    <p>Already have an account? <br> <a href="{{route('login')}}">Sign In</a></p>
                </div>
            </div>
            <div class="col-lg-7">
                <h4 class="tx-gray-800 mg-b-25">Create Your Account</h4>
<form method="POST" ction="{{ route('register') }}">
    @csrf

                <div class="form-group">
                    <label class="form-control-label">Email:</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Type email address" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div><!-- form-group -->
<div class="row row-xs">
<div class="col">
    <div class="form-group">
        <label class="form-control-label">Firstname:</label>
        <input id="f_name" type="text" class="form-control @error('f_name') is-invalid @enderror" name="f_name" placeholder="Type firstname" value="{{ old('f_name') }}" required autocomplete="f_name">

        @error('f_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div><!-- form-group -->
</div><!-- col -->
<div class="col">
    <div class="form-group">
        <label class="form-control-label">Lastname:</label>
        <input id="l_name" type="text" class="form-control @error('l_name') is-invalid @enderror" name="l_name" placeholder="Type lastname" value="{{ old('l_name') }}" required autocomplete="l_name">

        @error('l_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div><!-- form-group -->
</div><!-- col -->
</div><!-- row -->
<div class="row row-xs">
<div class="col">
    <div class="form-group">
        <label class="form-control-label">Password:</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Type password" value="{{ old('password') }}" required autocomplete="password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div><!-- form-group -->
</div><!-- col -->
<div class="col">
    <div class="form-group">
        <label class="form-control-label">Confirm Password:</label>
        <input id="password_confirm" type="password" class="form-control" name="password_confirmation"  placeholder="Retype password"
       required autocomplete="new-password">
    </div><!-- form-group -->
</div><!-- col -->
</div><!-- row -->
<div class="form-group">
<label class="form-control-label">Company Name:</label>
<input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" placeholder="Type company name" value="{{ old('company_name') }}" required autocomplete="company_name">

@error('company_name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div><!-- form-group -->
<div class="form-group mg-b-20 tx-12">By clicking Sign Up button below you agree to our <a href="">Terms of Use</a> and our <a href="">Privacy Policy</a></div>
<button type="submit" class="btn btn-block">Sign Up</button>
</div><!-- col-7 -->
</form>
</div><!-- row -->
<p class="tx-center tx-white-5 tx-12 mg-t-15">Copyright &copy; 2020. All Rights Reserved. SyrianCloud</p>
</div><!-- signin-box -->
</div><!-- sc-signin-wrapper -->
@endsection

