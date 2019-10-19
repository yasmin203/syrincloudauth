@extends('main')
@section('content')
<div class="sc-signin-wrapper">
    <div class="sc-signin-box">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <div>
                    <i class="tx-120 icon-SyrianCloud"></i>
                    <hr >
                    <p >Dont have an account? <br> <a href="{{route('register')}}">Sign up Now</a></p>
                </div>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            </div>
            <div class="col-lg-7">
                    <h4 class="tx-center tx-gray-800 mg-b-25 mg-t-15">Forgot Password ?</h4>
                    <p class="tx-center mg-b-25">You can reset your password here.</p>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                <div class="form-group">
                    <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter your email address" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div><!-- form-group -->
                <button type="submit" class="btn btn-block">Reset your email address</button>
            </div><!-- col-7 -->
        </div><!-- row -->
    </form>
        <p class="tx-center tx-white-5 tx-12 mg-t-15">Copyright &copy; 2020. All Rights Reserved. SyrianCloud</p>
    </div><!-- signin-box -->
</div><!-- sc-signin-wrapper -->

@endsection
