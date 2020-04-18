@extends('layouts.app')

@section('content')

<style type="text/css">
            .background {
                background-image: url('/images/K4.jpg');
                background-repeat:no-repeat;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .whiteblank{
                background-color: #FFF;
                width: 80%;
                height: 89.7vh;
            }

            .logo{
                background-image: url('/images/logok4.png');
                height: 150px;
                background-repeat: no-repeat;
                align-self: center;
            }

            .logok4{
                height: 150px;
                width: 150px;
            }

</style>

<div class="container" style="width: 50%;">
    <div class="whiteblank">                        
    <div class="row justify-content-center" style="text-align: center; vertical-align: middle; align-content: center;" >
        <div class="col-md-8">
            <div class="card">
                <br>
                <div class="card-header" style="font-size: 20px;">{{ __('Login') }}</div>
                <br>

                <img src="{{URL::asset('/images/logok4.png')}}" class="logok4">

                <br>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <br><br>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="border-radius: 20px; border-style: solid; width: 200px; border-color: #5eb1bf; text-align: center;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <br><br>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="border-radius: 20px; border-style: solid; width: 200px; border-color: #5eb1bf; text-align: center;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="font-size: 15px; border-radius: 10px; padding: 10px; border-style: solid; background-color: #5eb1bf; color: white; width: 20%;" >
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <br><br>
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color: blue;">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
