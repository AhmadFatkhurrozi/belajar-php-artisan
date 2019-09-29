<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
	<h3>Edit Data Pegawai</h3>

	<a href="{{ url('/') }}/pegawai"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="{{ url('/') }}/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" name="nama" value="{{ $p->pegawai_nama }}" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" value="{{ $p->pegawai_jabatan }}" required="required"> <br/>
		Umur <input type="number" name="umur" value="{{ $p->pegawai_umur }}" required="required"> <br/>
		Alamat <textarea name="alamat" required="required">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="update">
	</form>
	@endforeach
</body>
</html>