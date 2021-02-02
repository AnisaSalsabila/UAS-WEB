<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	$npm           = mysqli_real_escape_string($db, trim($_POST['npm']));
	$nama          = mysqli_real_escape_string($db, trim($_POST['nama']));
	$tempat_lahir  = mysqli_real_escape_string($db, trim($_POST['tempat_lahir']));

	$tanggal       = $_POST['tanggal_lahir'];
	$tgl           = explode('-', $tanggal);
	$tanggal_lahir = $tgl[2] . "-" . $tgl[1] . "-" . $tgl[0];

	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat        = mysqli_real_escape_string($db, trim($_POST['alamat']));
	$kodepos    = $_POST['kode_pos'];

	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysqli_query($db, "INSERT INTO is_siswa(npm,
													 nama,
													 tempat_lahir,
													 tanggal_lahir,
													 jenis_kelamin,
													 alamat,
													 kode_pos)	
											  VALUES('$npm',
													 '$nama',
													 '$tempat_lahir',
													 '$tanggal_lahir',
													 '$jenis_kelamin',
													 '$alamat',
													 '$kodepos')");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: home.php?alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: home.php?alert=1');
	}
}
