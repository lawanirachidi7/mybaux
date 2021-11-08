
@extends('layouts.log')

@section('content')
<div class="account-content mt-4">
    <div class="text-center mb-3">
        <p class="text-muted mb-0 font-13">Email de recupération de mot de passe. </p>
    </div>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group row">
            <div class="col-12">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-12">
                <button type="submit" class="btn btn-md btn-block btn-primary waves-effect waves-light">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </div>
    </form>
    <div class="clearfix"></div>
</div>
</div>
@endsection