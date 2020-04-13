<?php
include '../../../model/model.php';

class jadwalControl


{
    public $model;

    function __construct()
    {
        $this->model = new model();
    }

    function indexAdmin()
    {
        $data = $this->model->selectAll();
        include "tampil_jadwal.php";
    }

    function viewInsertAdmin()
    {
        include "tambah_jadwal.php";
    }

    // function insert()
    // {
    //     $kode_barang = $_POST['kode_barang'];
    //     $nama_barang = $_POST['nama_barang'];
    //     $harga_jual = $_POST['harga_jual'];
    //     $harga_beli = $_POST['harga_beli'];
    //     $stok = $_POST['stok'];

    //     $insert = $this->model->insertJadwal($kode_barang, $nama_barang, $harga_jual, $harga_beli, $stok);
    //     header("location:index.php");
    // }

    function viewSelect()
    {
        $data = $this->model->selectJadwal();
        include "jadwal.php";
    }
}
