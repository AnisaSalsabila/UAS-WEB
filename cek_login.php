<?php

include 'config/database.php';

if (isset($_POST['log'])) {
  $user = $db->real_escape_string($_POST['username']);
  $pass = $db->real_escape_string($_POST['password']);

  $query = $db->query("SELECT * FROM is_user WHERE username = '$user' AND password='$pass'");
  $data = $query->fetch_array();
  $username = $data['username'];
  $password = $data['password'];

  if ($user == $username && $pass == $password) {
    session_start();
    $_SESSION['nama'] = $username;
    $name = $_SESSION['nama'];
    echo "<script>alert('Anda berhasil login. Sebagai : $name');</script>";
    echo "<meta http-equiv='refresh' content='0; url=home.php'>";
  } else {
    echo "<script>alert('Username dan Password Tidak Ditemukan');</script>";
    echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
  }
}
