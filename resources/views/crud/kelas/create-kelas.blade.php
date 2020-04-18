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

	<div class="subheading">Tambah Kelas</div>

	<div class="table-center">

	<form action="/create-kelas-process" method="post">
	{{csrf_field()}}	

	<table cellspacing="0" cellpadding="15px" align="center">
		<tr>
			<td>Nama Kelas</td>
			<td><input type="text" name="kelas_nama" required></td>
		</tr>
		<tr>
			<td>Kompetensi Keahlian</td>
			<td>
			<select required name="kelas_kompetensi">
				<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
				<option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
				<option value="Multimedia">Multimedia</option>
				<option value="Teknik Otomasi Industri">Teknik Otomasi Industri</option>	
				<option value="Teknik Instalasi Listrik">Teknik Instalasi Listrik</option>	
				<option value="Teknik Audio Video">Teknik Audio / Video</option>		
			</select>
		</td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;">
				<button>Tambah Kelas</button>
			</td>
		</tr>
	</table>


	</form>

	</div>

	</div>	

</div>

@endsection