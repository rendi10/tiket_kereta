<?php
include '../../../model/model.php';

class profilControl


{
    public $model;

    function __construct()
    {
        $this->model = new model();
    }
    function profil()
    {
        $username = $_SESSION['username'];
        $data = $this->model->selectProfil($username);
        $row = $this->model->fetch($data);

        include "view.php";
    }
    function viewEdit(){
        $username = $_SESSION['username'];
        $data = $this->model->selectProfil($username);
        $row = $this->model->fetch($data);
        include "edit.php";

    }
    function updateProfils(){
        $id_penumpang= $_POST['id_penumpang'];
        $nama_penumpang = $_POST['nama_penumpang'];
		$jk = $_POST['jk'];
		$ttl = $_POST['ttl'];
		$no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];
        
        $insert = $this->model->updateProfil($id_penumpang, $nama_penumpang, $jk, $ttl, $no_hp, $alamat);
    }

  
}
?>