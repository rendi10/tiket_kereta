<?php
include '../../../model/model.php';

class jadwalControl


{
    public $model;

    function __construct()
    {
        $this->model = new model();
    }

    //CONTROLLER ADMIN DISINI!

    function indexAdmin()
    {
        $data = $this->model->selectAll();
        include "tampil_jadwal.php";
    }

    function viewInsertAdmin()
    {
        include "tambah_jadwal.php";
    }

    function insertJadwal()
    {
        $id_kereta = $_POST['id_kereta'];
        $jam_berangkat = $_POST['jam_berangkat'];
        $jam_tiba = $_POST['jam_tiba'];
        $harga = $_POST['harga'];
        $dari = $_POST['dari'];
        $tujuan = $_POST['tujuan'];
        $insert = $this->model->insertJadwal($id_kereta, $jam_berangkat, $jam_tiba, $harga, $dari, $tujuan);
    }

    //CONTROLLER PENUMPANG 

    function viewSelect()
    {
        $data = $this->model->selectJadwal();
        include "jadwal.php";
    }
}
