<?php

class model
{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "uts";
	var $koneksi = "";

	function __construct()
	{
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
	}

	function execute($query)
	{
		return mysqli_query($this->koneksi, $query);
	}

	function selectAll()
	{
		$query = "select * from tbl_jadwal";
		return $this->execute($query);
	}

	function selectJadwal($id_jadwal)
	{
		$query = "select * from barang where id_jadwal='$id_jadwal'";
		return $this->execute($query);
	}

	function insertBarang($kode_barang, $nama_barang, $harga_jual, $harga_beli, $stok)
	{
		$query = "insert into barang values ('$kode_barang', '$nama_barang', '$harga_jual', '$harga_beli', '$stok')";
		return $this->execute($query);
	}

	function updateBarang($kode_barang, $nama_barang, $harga_jual, $harga_beli, $stok)
	{
		$query = "update barang set kode_barang='$kode_barang', nama_barang='$nama_barang', harga_jual='$harga_jual', harga_beli='$harga_beli', stock='$stok' where kode_barang='$kode_barang'";
		return $this->execute($query);
	}

	function hapus($kode_barang)
	{
		$query = "delete from barang where kode_barang='$kode_barang'";
		return $this->execute($query);
	}

	function fetch($var)
	{
		return mysqli_fetch_array($var);
	}

	function __destruct()
	{
	}
}
