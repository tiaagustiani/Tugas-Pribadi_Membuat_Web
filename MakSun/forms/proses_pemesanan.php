<?php
$Nama = $_POST["name"];
$Email = $_POST["email"];
$Kontak = $_POST["kontak"];
$Tanggal = $_POST["date"];
$Jam = $_POST["time"];
$Jumlah_Orang = $_POST["people"];
$Pesan = $_POST["message"];

include"koneksi.php";
$v1 = "insert into tbl_pemesanan values ('$Nama','$email','$kontak','$tanggal','$jam','$jumlah_orang','$pesan')";
$result =mysqli_query($link,$v1);
print("<html><head><meta http-equiv='refresh'content='0 url=index.html'>
</head><body</body></html>");
?>