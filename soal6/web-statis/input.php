<?php

include "koneksi.php";

$csr = $_POST['nama_csr'];
$prd = $_POST['nama_prd'];
$ctr = $_POST['nama_ctr'];
$price = $_POST['price'];

$sql1 = mysqli_query($conn, "INSERT INTO product VALUES('' ,  '$prd', '$csr', '', '')");
$sql2 = mysqli_query($conn, "INSERT INTO atesb VALUES('' , '$csr',)");

// $sql1 = "INSERT INTO ates VALUES('','$csr','$prd')";
// $sql2 = "INSERT INTO atesb VALUES('','$kelas')";
mysqli_query($conn, $sql1);
mysqli_query($conn, $sql2);

header('location:index.php');
