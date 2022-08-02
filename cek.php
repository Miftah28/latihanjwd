<?php
$nama = $_POST['nama'];
if ($nama == "") {
    header("location:latihan.php?nama=kosong");
} else {
    echo "Nama anda adalah " . $nama;
}
