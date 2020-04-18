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
                width: 40%;
                height: 89.7vh;
            }

            .logo{
                background-image: url('/images/logok4.png');
                height: 150px;
                background-repeat: no-repeat;
                align-self: center;
            }

            .logok4{
                height: 120px;
                width: 120px;
            }

</style>

<div class="container">
    <div class="whiteblank">
    <div class="row justify-content-center" style="text-align: center; vertical-align: middle; align-content: center;">
        <div class="col-md-8">
            <div class="card">
                <br>
                <div class="card-header" style="font-size: 20px;">{{ __('Register') }}</div>
                <br>


                <img src="{{URL::asset('/images/logok4.png')}}" class="logok4">
                <br>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" style="border-radius: 20px; border-style: solid; width: 200px; border-color: #5eb1bf; text-align: center;">
                                <br><br>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="border-radius: 20px; border-style: solid; width: 200px; border-color: #5eb1bf; text-align: center;">
                                <br><br>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Daftar Sebagai</label>

                            <div class="col-md-6">                         
                                <select name="role" style="width: 200px; border-radius: 5px; border-style: solid; border-color:#5eb1bf; ">
                                    <option value="1">Murid</option>
                                    <option value="2">Admin</option>
                                    <option value="3">Petugas</option>
                                </select>
                                <br><br>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="border-radius: 20px; border-style: solid; width: 200px; border-color: #5eb1bf; text-align: center;">
                                <br><br>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style="border-radius: 20px; border-style: solid; width: 200px; border-color: #5eb1bf; text-align: center;">
                                <br><br>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info" style="font-size: 15px; border-radius: 10px; padding: 10px; border-style: solid; background-color: #5eb1bf; color: white; width: 20%;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
