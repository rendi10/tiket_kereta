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

    //Tambah jadwal
    function viewInsertJadwal()
    {
        $data = $this->model->selectKereta();
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

    //Edit Jadwal
    function viewEditJadwal($id_jadwal)
    {
        $data = $this->model->selectJadwalUpdate($id_jadwal);
        // $row = $this->model->fetch($data);

        include "edit_jadwal.php";
    }

    function updateJadwalControl()
    {
        $id_jadwal = $_POST['id_jadwal'];
        $id_kereta = $_POST['id_kereta'];
        $jam_berangkat = $_POST['jam_berangkat'];
        $jam_tiba = $_POST['jam_tiba'];
        $harga = $_POST['harga'];
        $dari = $_POST['dari'];
        $tujuan = $_POST['tujuan'];

        $update = $this->model->updateJadwalModel($id_jadwal, $id_kereta, $jam_berangkat, $jam_tiba, $harga, $dari, $tujuan);
        // header("location:index.php");
    }

    function hapusJadwalControl($id_jadwal)
    {
        $hapus = $this->model->hapusJadwalModel($id_jadwal);
        header("location:index.php");
    }

    //CONTROLLER PENUMPANG 

    function viewSelect()
    {
        $data = $this->model->selectJadwal();
        include "jadwal.php";
    }
}
