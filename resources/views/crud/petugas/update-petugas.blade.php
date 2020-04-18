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

table{
	text-align: left;
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

	<div class="subheading">Perbarui Data Siswa</div>

	<div class="table-center">

		

	<table cellspacing="0" cellpadding="15px" align="center">
		@foreach($petugas as $k)
		<form action="/edit-petugas-process" method="post">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{$k->id}}">
		<tr>
			<td>Nama Siswa : </td>
			<td><input type="text" name="siswa_nama" value="{{$k->name}}" required></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="siswa_alamat" value="{{$k->alamat}}" required></td>
		</tr>
		<tr>
			<td>Nomor Telepon</td>
			<td><input type="text" name="siswa_telepon" value="{{$k->telepon}}" required></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;">
				<button>Perbarui Data Siswa</button>
			</td>
		</tr>
	</form>
	@endforeach
	</table>



	</div>

	</div>	

</div>

@endsection