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

	<div class="subheading">Perbarui Data SPP</div>

	<div class="table-center">

		

	<table cellspacing="0" cellpadding="15px" align="center">
		@foreach($spp as $k)
		<form action="/edit-spp-process" method="post">
		{{csrf_field()}}
		<input type="hidden" name="spp_id" value="{{$k->id_spp}}">
		<tr>
			<td>Nominal</td>
			<td><input type="text" name="spp_nominal" style="width: 200px;" value="{{$k->nominal}}" required></td>
		</tr>
		<tr>
			<td>Tanggal Pembayaran</td>
			<td><input type="date" name="spp_tanggal" style="width: 200px;" value="{{$k->tanggal_pembayaran}}" required ></td>
		</tr>
		<tr>
			<td>SPP Bulan Asal : </td>
			<td>{{$k->untuk_bulan}}</td>
		</tr>
        <tr>
            <td>Untuk SPP Bulan </td>
            <td>
                <select name="spp_bulan" style="width: 200px;">
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Untuk SPP Tahun </td>
            <td><input type="text" name="spp_tahun" style="width: 200px;" value="{{$k->untuk_tahun}}" required ></td>
        </tr>
		<tr>
			<td colspan="2" style="text-align: center;">
				<button>Perbarui Data SPP</button>
			</td>
		</tr>
	</form>
	@endforeach
	</table>



	</div>

	</div>	

</div>

@endsection