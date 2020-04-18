@extends('layouts.app')

@section('content')

<style type="text/css">
	
.content-center-white{
    margin: 100px;
    margin-right: 200px;
    margin-left: 200px;
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

	<div class="subheading">Atur Kelas</div>

	<div class="table-center">

	<table align="center" border="1px" cellpadding="10px" cellspacing="0px">
		<tr>
			<th>Id Kelas</th>
			<th>Nama Kelas</th>
			<th>Kompetensi Keahlian</th>
			<th colspan="2" >Tindakan</th>
		</tr>
		@foreach($kelas as $k)
		<tr>
			<td>{{ $k->id_kelas }}</td>
			<td>{{ $k->nama_kelas}}</td>
			<td>{{ $k->kompetensi_keahlian}}</td>
			<td><a href="/edit-kelas/{{$k->id_kelas}}" style="color: #5eb1bf;">Edit</a></td>
			<td><a href="/delete-kelas/{{$k->id_kelas}}" style="color: red;">Hapus</a></td>
		</tr>
		@endforeach
	</table>

	</div>

	<table align="center" cellpadding="10px" cellspacing="0px">
		<tr style="color: white;">
			<th>Id Kelas</th>
			<th>Nama Kelas</th>
			<th>Kompetensi Keahlian</th>
			<th colspan="2">
				<a href="/create-kelas" class="button-link">Tambah Kelas</a>
			</th>
		</tr>
	</table>	


	</div>	

</div>

@endsection