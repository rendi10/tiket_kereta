<?php

include "../model/model.php";
class regisControl
{

	public $model;

	function __construct()
	{
		$this->model = new model();
    }
    function insertPenumpang(){
		$nama_penumpang = $_POST['nama_penumpang'];
		$jk = $_POST['jk'];
		$ttl = $_POST['ttl'];
		$no_hp = $_POST['no_hp'];
		$alamat = $_POST['alamat'];
		$insert = $this->model->insertPenumpang($nama_penumpang, $jk, $ttl, $no_hp, $alamat);
		header("location: daftar/index.php");

	}
	function insertUser(){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$insert = $this->model->insertUser($eusername, $email, $password);

		header("location: daftar/index.php");
	}
}


?>