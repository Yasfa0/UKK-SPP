@extends('layouts.app')

@section('content')

<style type="text/css">
	
.content-center-white{
    margin: 100px;
    align-content: center;
    align-self: center;
    vertical-align: middle;
    background-color: white;
    padding: 30px;
}

table{
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

</style>

<div class="container">
	
  <div class="content-center-white">

	<div class="subheading">Kelola Data Siswa</div>

	<div class="table-center">

	<table align="center" border="1px" cellpadding="10px" cellspacing="0px">
		<tr>
			<th>Id Petugas</th>
			<th>Nama Siswa</th>
			<th>E-Mail</th>
			<th>Alamat</th>
			<th>Telepon</th>
			<th colspan="2" >Tindakan</th>
		</tr>
		@foreach($petugas as $k)
		<tr>
			<td>{{ $k->id }}</td>
			<td>{{ $k->name}}</td>
			<td>{{ $k->email}}</td>
			<td>{{ $k->alamat}}</td>
			<td>{{ $k->telepon}}</td>
			<td><a href="/edit-petugas/{{$k->id}}" style="color: #5eb1bf;">Edit</a></td>
			<td><a href="/delete-petugas/{{$k->id}}" style="color: red;">Hapus</a></td>
		</tr>
		@endforeach
	</table>

	</div>

	<table align="center" cellpadding="10px" cellspacing="0px">
		<tr style="color: white;">
			<th>Id Kelas</th>
			<th>Nama Kelas</th>
			<th>Kompetensi Keahlian</th>
			<th>Nama Kelas</th>
			<th>Kompetensi Keahlian</th>
			<th>Nama Kelas</th>
			<th colspan="2">
				<!-- <a href="/create-siswa" class="button-link">Daftarkan Siswa</a> -->
			</th>
		</tr>
	</table>	


	</div>	

</div>

@endsection