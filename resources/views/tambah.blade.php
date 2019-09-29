<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
</head>
<body>
	<div class="container">
		<h3>Data Pegawai</h3>

	<a href="{{ url('/') }}/pegawai"> Kembali</a>
	
	<br/>
	<br/>

	<form class="form-group" action="{{ url('/') }}/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" class="form-control" name="nama" required="required"> <br/>
		Jabatan <input type="text" class="form-control" name="jabatan" required="required"> <br/>
		Umur <input type="number" class="form-control" name="umur" required="required"> <br/>
		Alamat <textarea class="form-control" name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

	</div>
</body>
</html>