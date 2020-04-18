<!DOCTYPE html>
<html>
<head>
	<title>Laporan SPP</title>
</head>
<body>
	<style type="text/css">
		
		table{
	text-align: center;
}
	
	.title{
		font-size: 20px;
	}

	</style>
	<center>
		<div class="title">Laporan SPP</div>
		<h6></h5>
	</center>

	<table  align="center" border="1px" cellpadding="10px" cellspacing="0px">
		<thead>
			<tr>
				<th>No</th>
				<th>Nominal</th>
				<th>Petugas</th>
				<th>NIS</th>
				<th>Tanggal Pembayaran</th>
				<th>Bulan</th>
				<th>Tahun</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($spp as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->nominal}}</td>
				<td>{{$p->id_petugas}}</td>
				<td>{{$p->nis}}</td>
				<td>{{$p->tanggal_pembayaran}}</td>
				<td>{{$p->untuk_bulan}}</td>
				<td>{{$p->untuk_tahun}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>