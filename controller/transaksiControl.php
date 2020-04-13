<?php
include '../../../model/model.php';

class transaksiControl


{
    public $model;

    function __construct()
    {
        $this->model = new model();
    }

    function viewPribadi(){
        include "transaksi.php";

    }
    function viewSelect(){
        $data = $this->model->selectJadwal();
        include "jadwal.php";

    }
    function cek (){
        $username = 'lalacans';
        return $this->model->selectIdPenumpang($username);

    }

    function insert(){
        $id_jadwal = $_POST['id_jadwal'];
        $username = $_POST['username'];
        $id_penumpang = $this->model->selectIdPenumpang($username);
        $tanggal_berangkat = $_POST['tanggal_berangkat'];
        $insert = $this->model->insertTransaksi($id_jadwal, $id_penumpang, $tanggal_berangkat);
    }
}

?>