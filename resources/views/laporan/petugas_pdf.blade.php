<!DOCTYPE html>
<html>
<head>
	<title>Laporan Petugas</title>
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
		<div class="title">Data Petugas</div>
		<h6></h5>
	</center>

	<table  align="center" border="1px" cellpadding="10px" cellspacing="0px">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>No Telepon</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($petugas as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->name}}</td>
				<td>{{$p->email}}</td>
				<td>{{$p->alamat}}</td>
				<td>{{$p->telepon}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>