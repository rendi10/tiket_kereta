<?php

include "model/model.php";

class controller
{

	public $model;

	function __construct()
	{
		$this->model = new model();
	}

	function halamanLogin()
	{
		include "view/index.php";
	}

	function indexAdmin()
	{
		$data = $this->model->selectAll();
		include "view/admin/jadwal/index.php";
	}

	function viewInsert()
	{
		include "view/addview.php";
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
	function insert()
	{
		$kode_barang = $_POST['kode_barang'];
		$nama_barang = $_POST['nama_barang'];
		$harga_jual = $_POST['harga_jual'];
		$harga_beli = $_POST['harga_beli'];
		$stok = $_POST['stok'];

		$insert = $this->model->insertBarang($kode_barang, $nama_barang, $harga_jual, $harga_beli, $stok);
		header("location:index.php");
	}

	function viewUpdate($kode_barang)
	{
		$data = $this->model->selectBarang($kode_barang);
		$row = $this->model->fetch($data);

		include "view/editview.php";
	}

	function update()
	{
		$kode_barang = $_POST['kode_barang'];
		$nama_barang = $_POST['nama_barang'];
		$harga_jual = $_POST['harga_jual'];
		$harga_beli = $_POST['harga_beli'];
		$stok = $_POST['stok'];

		$update = $this->model->updateBarang($kode_barang, $nama_barang, $harga_jual, $harga_beli, $stok);
		header("location:index.php");
	}

	function hapus($kode_barang)
	{
		$hapus = $this->model->hapus($kode_barang);
		header("location:index.php");
	}

	function __destruct()
	{
	}
}
