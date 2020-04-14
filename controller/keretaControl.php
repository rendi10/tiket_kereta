<?php

include "../../../model/model.php";

class keretaControl
{

    public $model;

    function __construct()
    {
        $this->model = new model();
    }
    function indexKereta()
    {
        $data = $this->model->selectAllKereta();
        include 'tampil_kereta.php';
    }

    function viewInsertKereta()
    {
        $otomatis = $this->model->idKereta();
        $data = $this->model->selectKereta();
        include "tambah_kereta.php";
    }

    function insertKereta()
    {
        $id_kereta = $_POST['id_kereta'];
        $nama_kereta = $_POST['nama_kereta'];
        $kelas = $_POST['kelas'];


        $insert = $this->model->insertKereta($id_kereta, $nama_kereta, $kelas);
    }

    function hapusKeretaControl($id_kereta)
    {
        $hapus = $this->model->hapusKeretaModel($id_kereta);
        header("location:index.php");
    }
}
