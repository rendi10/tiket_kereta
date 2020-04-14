<?php
include '../../../model/model.php';

class transaksiControl


{
    public $model;

    function __construct()
    {
        $this->model = new model();
    }

    function viewPribadi()
    {
        include "transaksi.php";
    }
    function viewSelect()
    {
        $data = $this->model->selectJadwal();
        include "jadwal.php";
    }


    function insert()
    {
        $id_jadwal = $_POST['id_jadwal'];
        $username = $_POST['username'];
        $tanggal_berangkat = $_POST['tanggal_berangkat'];
        $id_penumpang = $this->model->selectIdPenumpang($username);

        $insert = $this->model->insertTransaksi($id_jadwal, $id_penumpang, $tanggal_berangkat);
    }
    function insertOthers()
    {

        $id_jadwal = $_POST['id_jadwal'];
        $tanggal_berangkat = $_POST['tanggal_berangkat'];
        $others = $this->model->otherTransaksi($id_jadwal, $tanggal_berangkat);
    }
    function insertOther()
    {
        $id_jadwal = $_POST['id_jadwal'];
        $tanggal_berangkat = $_POST['tanggal_berangkat'];
        $nama_penumpang = $_POST['nama_penumpang'];
        $jk = $_POST['jk'];
        $ttl = $_POST['ttl'];
        $no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];
        $others = $this->model->otherTransaksi($id_jadwal, $tanggal_berangkat);
        $other = $this->model->insertOtherPenumpang($nama_penumpang, $jk, $ttl, $no_hp, $alamat);
    }

    //RESEVASI ADMIN

    function view(){
        $data = $this->model->selectReservasi();
        include 'tabel.php';

    }

    
}
