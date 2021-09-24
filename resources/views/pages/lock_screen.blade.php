
@extends('layouts.log')

@section('content')
<div class="account-content mt-4">
    <div class="text-center mb-3">
        <p class="text-muted mb-0 font-13">Votre mot de passe. </p>
    </div>
    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        @csrf
        
        <div class="form-group row">
            <div class="col-12">
                <label for="password" >{{ __('Password') }}</label>
                <input id="email" type="email"  hidden class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email" autofocus>

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        
        <div class="form-group row mb-0">
            <div class="col-12 ">
                <button type="submit" class="btn btn-md btn-block btn-primary waves-effect waves-light">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
    </form>
    <div class="clearfix"></div>
    {{-- <div class="row mt-3">
        <div class="col-sm-12 text-center">
            <p class="text-muted mb-0">Se connecter à un autre compte? <a href="{{route('login')}}" class="text-dark ml-1"><b>Changer</b></a></p>
        </div>
    </div> --}}

</div>

</div>
@endsection
