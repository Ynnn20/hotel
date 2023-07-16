<?php
$koneksi = new mysqli('localhost', 'root', '', 'dbhotel')
    or die(mysqli_error($koneksi));


if (isset($_POST['simpan'])) {
    $idPengunjung = $_POST['idPengunjung'];
    $noKamar = $_POST['noKamar'];
    $nmPengunjung = $_POST['nmPengunjung'];
    $jk = $_POST['jk'];

    $koneksi->query("INSERT INTO hotel (idPengunjung, noKamar, nmPengunjung, jk) VALUES ('$idPengunjung', '$noKamar', '$nmPengunjung','$jk')");

    header("location:hotel.php");
}


if (isset($_GET['idPengunjung'])) {
    $idPengunjung = $_GET['idPengunjung'];
    $koneksi->query("DELETE FROM hotel where idPengunjung = '$idPengunjung'");
    header("location:hotel.php");
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $koneksi->query("DELETE FROM users where id = '$id'");
    header("location:users.php");
}

if (isset($_POST['edit'])) {
    $idPengunjung = $_POST['idPengunjung'];
    $noKamar = $_POST['noKamar'];
    $nmPengunjung = $_POST['nmPengunjung'];
    $jk = $_POST['jk'];

    $koneksi->query("UPDATE hotel SET noKamar='$noKamar', nmPengunjung = '$nmPengunjung', jk = '$jk' WHERE idPengunjung = '$idPengunjung'");
    header("location:hotel.php");
}

if (isset($_POST['users'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $koneksi->query("INSERT INTO users (username, password, role) VALUES ('$username','$password','$role')");

    header("location:users.php");
}
?>