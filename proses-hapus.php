<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_GET['npm'])) {

	$npm = $_GET['npm'];

	// perintah query untuk menghapus data pada tabel is_siswa
	$query = mysqli_query($db, "DELETE FROM is_siswa WHERE npm='$npm'");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil delete data
		header('location: home.php?alert=4');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: home.php?alert=1');
	}
}
