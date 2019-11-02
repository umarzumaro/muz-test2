<?php

class Database
{

    public $host = 'localhost',
        $user = 'root',
        $pass = '',
        $db_name = 'db_coffeshop',
        $koneksi = '';

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db_name);
        //mysqli_select_db($this->db_name);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }

    function Tampil_data()
    {

        $data = mysqli_query($this->koneksi, " SELECT * FROM tampil ");
        $data2 = mysqli_query($this->koneksi, "  SELECT prd.id, csr.name, prd.name_prd, ctr.name_ctr, prd.price
        from (cashier csr left JOIN product prd on csr.id = prd.id_category) 
        LEFT JOIN category ctr on ctr.id = prd.id_category");

        while ($d = mysqli_fetch_assoc($data2)) {
            $hasil[] = $d;
            //var_dump($d);
        }
        return $hasil;
    }

    function Tambah_data($nama, $cashier, $product, $category, $price)
    {

        mysqli_query($this->koneksi, " INSERT INTO tampil VALUES('', '$nama', '$cashier', '$product', '$category', '$price') ");
    }

    function Hapus_data($id)
    {

        mysqli_query($this->koneksi, " DELETE FROM mahasiswa_ueu WHERE id='$id' ");
    }

    function Get_by_id($id_data)
    {

        $query = mysqli_query($this->koneksi, " SELECT * FROM mahasiswa_ueu WHERE id='$id_data' ");

        // if ($query === FALSE) {
        //     die(mysqli_error());
        // }else {

        //    while ($d = mysqli_fetch_array($query)) {
        //     $hasil[] = $d;

        //     }
        //     return $hasil;
        // }
        //return mysqli_fetch_assoc($query);

        return $query->fetch_array();
        // $data = mysqli_fetch_assoc($a);
        // return $a;



        // while($d = $query->fetch_array()){
        //     $hasil[] = $d;
        // }
        // return $hasil;

        // while ($d = mysqli_fetch_assoc($query)) {
        //     $hasil[] = $d;
        // }
        // return $hasil;

        //return mysqli_fetch_object($query);

    }


    function Update_data($nama, $jurusan, $ipk, $id)
    {

        // $query = mysqli_query($this->koneksi, 
        // " UPDATE mahasiswa_ueu SET nama='$nama', jurusan='$jurusan', ipk='$ipk' WHERE id='$id' ");
        $query = mysqli_query($this->koneksi, "update mahasiswa_ueu set nama='$nama', jurusan='$jurusan', ipk='$ipk' where id='$id'");

        // if ($query) {
        //     return 'data berhasil disimpan';
        // }else {
        //     return 'data gagal';
        // }
    }
}

$db = new Database();
    ///echo $db->Get_by_id();
    

    
    // echo($tes);
    // var_dump($tes);
    //$row = mysqli_fetch_array($data)
    //$d = $data->fetch_array()
