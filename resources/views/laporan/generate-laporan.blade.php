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

.button-menu{
    width: 200px;
    height: 100px;
    padding: 20px;
    margin: 20px;
    color: white;
    background-color: #5eb1bf;
    border-style: solid;
    font-size: 20px;
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

	<div class="subheading">Generate Laporan</div>

	<div class="table-center">

		<table align="center">
			<tr>
				<td>
					<button class="button-menu">
                    <a href="/generate-laporan-siswa" class="button-link">Laporan Siswa</a>
                    </button>
				</td>
				<td>
					<button class="button-menu">
                    <a href="/generate-laporan-spp/" class="button-link">Laporan SPP</a>
                    </button>
				</td>
			</tr>
			<tr>
				<td>
					<button class="button-menu">
                    <a href="/generate-laporan-admin" class="button-link">Laporan Admin</a>
                    </button>
				</td>
				<td>
					<button class="button-menu">
                    <a href="/generate-laporan-petugas" class="button-link">Lap. Petugas </a>
                    </button>
				</td>
			</tr>
		</table>

	</div>

	</div>	

</div>

@endsection