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

	function selectBarang($kode_barang)
	{
		$query = "select * from barang where kode_barang='$kode_barang'";
		return $this->execute($query);
	}
	function idPenumpang(){
		$query = "SELECT * FROM tbl_penumpang ORDER BY id_penumpang DESC LIMIT 0,1";
          $mydata = $this->execute($query);
          $row= mysqli_fetch_array($mydata);
          // ID OTOMATIS//***************************************************
          $awal=substr($row['id_penumpang'],3,4)+1;
          if($awal<10){
            $auto='IP00'.$awal;
          }elseif($awal > 9 && $awal <=99){
            $auto='IP0'.$awal;
          }else{
            $auto='IP'.$awal;
		  }
		  
		  return $auto;

	}
	function insertPenumpang($nama_penumpang, $jk, $ttl, $no_hp, $alamat){
		$id_penumpang = $this->idPenumpang();
		$query = "insert into tbl_penumpang values ('$id_penumpang', '$nama_penumpang', '$jk', '$ttl', '$no_hp', '$alamat')";
		return $this->execute($query);

	}
	function idUser(){
		$query = "SELECT * FROM tbl_user ORDER BY id_user DESC LIMIT 0,1";
          $mydata = $this->execute($query);
          $row= mysqli_fetch_array($mydata);
          // ID OTOMATIS//***************************************************
          $awal=substr($row['id_user'],3,4)+1;
          if($awal<10){
            $auto='ID00'.$awal;
          }elseif($awal > 9 && $awal <=99){
            $auto='ID0'.$awal;
          }else{
            $auto='ID'.$awal;
		  }
		  
		  return $auto;

	}
	function insertUser($username, $email, $password){
		$id_user = $this->idUser();
		$level = 'pengunjung';
		$query = "insert into tbl_user values ('$id_user', '$username', '$level', '$email', '$password')";
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
