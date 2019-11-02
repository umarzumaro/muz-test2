<?php

require 'config.php';
// $num_rec = 10;

// if (isset($_GET['page'])) {
//     $page = $_GET['page'];
// } else {
//     $page = 1;
// };

// $start_from = ($page - 1) * $num_rec;

// $sqlTotal = "SELECT * FROM tb_product";

$sql = "SELECT csr.nama_csr, prd.nama_prd, ctr.nama_ctr, prd.price
FROM (tb_cashier csr left JOIN tb_product prd on csr.id_csr = prd.id_ctr) 
LEFT JOIN tb_category ctr on ctr.id_ctr = prd.id_ctr";

$queryResult = $mysqli->query($sql);
$result = array();

// $result = $mysqli->query($sql);

while ($row = $queryResult->fetch_assoc()) {
    $result[] = $row;
}

echo json_encode($result);
// $data['data'] = $json;

// $result = mysqli_query($mysqli, $sqlTotal);

// $data['total'] = mysqli_num_rows($result);
// echo json_encode($data, JSON_PRETTY_PRINT);
