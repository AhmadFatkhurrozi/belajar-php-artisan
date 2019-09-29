<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
	<style type="text/css">
	.pagination li{
		float: left;
		list-style-type: none;
		margin:5px;
	}
	</style>

</head>
<body>

<div class="container">
	<h3>Data Pegawai</h3>

	<a href="{{ url('/') }}/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br>
	<form action="{{ url('/pegawai/cari') }}" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input type="submit" class="btn btn-secondary" value="CARI">
	</form>

	<br/>

	<table class="table table-bordered">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a class="btn btn-warning" href="{{ url('/pegawai/edit/'.$p->pegawai_id ) }}">Edit</a>
				<a class="btn btn-danger" href="{{ url('/pegawai/hapus/'.$p->pegawai_id ) }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

	<br>

	Halaman : {{ $pegawai->currentPage() }} <br>
	Jumlah Data : {{ $pegawai->total() }} <br/>
	Data Per Halaman : {{ $pegawai->perPage() }} <br/>

	{{ $pegawai->links() }}
</div>	

<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>