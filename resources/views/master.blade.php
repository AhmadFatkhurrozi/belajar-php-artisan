<!DOCTYPE html>
<html>
<head>
	<title>Template Blade Laravel</title>
</head>
<body>

	<header>

		<h2>Belajar Artisan</h2>
		
		<nav>
			<a href="/blog">HOME</a>
			|
			<a href="/blog/tentang">TENTANG</a>
			|
			<a href="/blog/kontak">KONTAK</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>

	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>


	<!-- bagian konten blog -->
	@yield('konten')


	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="https://jombangdev.com">jombangdev.com</a>. 2019</p>
	</footer>

</body>
</html>