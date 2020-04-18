@extends('layouts.app')

@section('content')

<style type="text/css">
	
.content-center-white{
    margin: 100px;
    margin-right: 300px;
    margin-left: 300px;
    align-content: center;
    align-self: center;
    vertical-align: middle;
    background-color: white;
    padding: 30px;
}

input{
	padding: 5px;
}

table{
	text-align: left;
}

form{
	text-align: center;
}

.table-center{
	margin: 20px;
	vertical-align: middle;
}

.subheading{
	text-align: center;
	vertical-align: middle;
	font-size: 20px;
}

.button-link{
    color: white;
    background-color: #5eb1bf;
    padding: 10px;
    border-radius: 10px;
 }

 button{
 	border-style: solid;
 	color: white;
 	background-color: #5eb1bf;
 	padding: 10px;
 	border-radius: 10px;
 	font-size: 17px;
 }

</style>

<div class="container">
	
  <div class="content-center-white">

	<div class="subheading">Daftarkan Siswa</div>

	<div class="table-center">

	<form action="/create-siswa-process" method="post"> 
	{{csrf_field()}}	

	<table cellspacing="0" cellpadding="15px" align="center">
		<tr>
			<td>Nama Siswa</td>
			<td><input type="text" name="siswa_nama" required></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="siswa_email" required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="siswa_password" required ></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;">
				<button>Tambah Siswa</button>
			</td>
		</tr>
	</table>
	</form>

	<!-- <form method="POST" action="{{ route('register') }}"> 
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <br>

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

                                <input type="hidden" name="role" value="1">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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

                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info" style="font-size: 15px; border-radius: 10px; padding: 10px; border-style: solid; background-color: #5eb1bf; color: white; width: 20%;">
                                     {{ __('Register') }} 
                                    Daftarkan Siswa
                                </button>
                            </div>
                        </div>
                    </form>-->

	</div>

	</div>	

</div>

@endsection