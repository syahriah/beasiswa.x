<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width, initial-scale=1">
	<title>BEASISWA X</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<!--loader-->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>
	<!-- header -->
	<div class = "medsos">
		<div class = "container">
			<ul> 
				<li><a href="https://www.instagram.com/syhriah_sf/"  target="_blank" ><i class="fab fa-instagram"></i></a ></li>
				<li><a href="https://www.youtube.com/channel/UCaH-9brjuq6Z00S2RybmDrQ"  target="_blank" ><i class="fab fa-youtube"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.html"></a></h1>
			<ul>
				<li><a href="#home">HOME</a></li>
				<li><a href="#bio">DAFTAR</a></li>
				<li><a href="#hasil">HASIL SELEKSI</a></li>
				<li><a href="#contact">CONTACT</a></li>
				<li><a href="/logout">LOGOUT</a></li>
			</ul>
		</div>
	</header>
	<!-- banner -->
	<section class="home">
		<h2>WELCOME TO<br>
			<span class="efek-ngetik"></span>
		</h2>
	</section>

	<!-- about -->
	<section id="bio">
		<div class="container">
			<h3>PENDAFTARAN BEASISWA X</h3>
			<form action="/maintenance" method="POST">
				@csrf
			<label class="form-label">Masukkan Nama Lengkap</label>
			<div class="row g-3">
				<div class="col">
					<input type="text" class="form-control" placeholder="First name" aria-label="First name">
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
				</div>
			</div>
			<br>
			<div class="col-12">
				<label for="inputKampus" class="form-label">Nama Kampus</label>
				<input type="text" class="form-control" id="inputKampus" placeholder="Masukkan nama kampus secara lengkap">
			</div>
			<br>
			<div class="col-md-12">
				<label for="ak-kampus" class="form-label">Akreditasi Kampus</label>
				<select id="ak-kampus" class="form-select">
				<option>A</option>
				<option>B</option>
				<option>C</option>
				<option selected >...</option>
				</select>
			</div>
			<br>
			<div class="col-12">
				<label for="inputProdi" class="form-label">Program Studi</label>
				<input type="text" class="form-control" id="inputProdi" placeholder="Masukkan Program Studi">
			</div>
			<br>
			<div class="col-md-12">
				<label for="ak-prodi" class="form-label">Akreditasi Program Studi</label>
				<select id="ak-prodi" class="form-select">
				<option>A</option>
				<option>B</option>
				<option>C</option>
				<option selected >...</option>
				</select>
			</div>
			<br>
			<div class="col-12">
				<label for="inputIPK" class="form-label">Nilai IPK</label>
				<input type="text" class="form-control" id="inputIPK" placeholder="Masukkan nilai IPK terakhir">
			</div>
			<br>
			<div class="col-12">
				<label for="inputUKT" class="form-label">Biaya UKT</label>
				<input type="text" class="form-control" id="inputUKT" placeholder="Masukkan biaya UKT Per-Semester">
			</div>
			<br>
			<label for="inputGaji" class="form-label">Gaji Orang Tua Per-Bulan</label>
				<select id="inputGaji" class="form-select">
				<option selected>Rp 1.000.000 - Rp 2.000.000</option>
				<option>Rp 2.000.000 - Rp 3.000.000</option>
				<option>Rp 3.000.000 - Rp 4.000.000</option>
				<option>Rp 4.000.000 - Rp 5.000.000</option>
				<option>Rp 5.000.000 Keatas</option>
				</select>
				<br>
			<div class="col-12">
				<label for="foto" class="form-label">Foto Peserta</label>
				<input type="image" class="form-control" id="foto">
				<br>
			<button type="submit" class="btn btn-primary my-3">Kirim</button>
			</div>
		</form>

				<section id="hasil">
					<div class="container">
					<br>
				<br>
						<h3>DAFTAR PESERTA LOLOS SELEKSI BEASISWA X</h3>	
						<h5>PENGUMUMAN HASIL SELEKSI AKAN DITAMPILKAN PADA ****</h5>
					</div>
				</section>
		

	<!-- CONTACT -->
	<section id="contact">
		<div class="container">
			<h3>CONTACT</h3>
			<div class="box">
				<div class="col-4">
					<div class="icon"><i class="fab fa-whatsapp"></i></div>
					<h4>WhatsApp</h4>
					<P> 08********</p>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<h4>Email</h4>
					<P>beasiswa.x@gmail.com</p>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fab fa-instagram"></i></div>
					<h4>Instagram</h4>
					<P> BEASISWA X </p>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fab fa-youtube"></i></div>
					<h4>Youtube</h4>
					<p>BEASISWA XT</p>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
			<h3>OUR ADDRESS</h3>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.6295341873392!2d116.2078899144956!3d-1.8979404986162505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df047bee25d8563%3A0xc58232e4f0facbf2!2sJl.%20Senaken%2C%20Tanah%20Grogot%2C%20Kabupaten%20Paser%2C%20Kalimantan%20Timur%2076251!5e0!3m2!1sen!2sid!4v1614415220963!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>

	<!--footer-->
	<footer>
		<div id="copyright">
			<small>Copyeight &copy; 2021 - BEASISWA X. All rights Reserve.</small>
		</div>
	</footer>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
	<script src="js/script.js"></script>
</body>
</html>