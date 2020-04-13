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
		$query = "SELECT * FROM tbl_jadwal j JOIN tbl_kereta k ON k.id_kereta = j.id_kereta";
		$on = $this->execute($query);
		return $on;
	}

	function selectJadwal()
	{
		$query = "SELECT * FROM tbl_jadwal j JOIN tbl_kereta k ON k.id_kereta = j.id_kereta";
		$on = $this->execute($query);
		return $on;
	}
	function selectIdPenumpang($username)
	{
		$query = "SELECT id_user FROM tbl_user WHERE username='$username'";
		$id_penumpang = $this->execute($query);
		$rows = $this->fetch($id_penumpang);
		return $rows['id_user'];
	}

	function insertTransaksi($id_jadwal, $id_penumpang, $tanggal_berangkat){
		
		$id_reservasi = $this->idReservasi();
		$query = "INSERT INTO tbl_reservasi VALUES ('$id_reservasi', '$id_jadwal', '$id_penumpang', '$tanggal_berangkat')";
		return $this->execute($query);
	}

	function idReservasi(){
		$query = "SELECT * FROM tbl_reservasi ORDER BY id_reservasi DESC LIMIT 0,1";
		$mydata = $this->execute($query);
		$row = mysqli_fetch_array($mydata);
		// ID OTOMATIS//***************************************************
		$awal = substr($row['id_reservasi'], 3, 4) + 1;
		if ($awal < 10) {
			$auto = 'IR00' . $awal;
		} elseif ($awal > 9 && $awal <= 99) {
			$auto = 'IR0' . $awal;
		} else {
			$auto = 'IR' . $awal;
		}

		return $auto;

	}
	function selectProfil($username)
	{

		$query = "SELECT id_user FROM tbl_user WHERE username='$username'";
		$cek = $this->execute($query);
		$rows = fetch($cek);
		$row1 = $rows['id_user']; //mengambil id dari sesi
		$pilih = "SELECT * FROM tbl_penumpang where id_penumpang='$row1'";
		return $this->execute($pilih);
	}

	function idPenumpang()
	{
		$query = "SELECT * FROM tbl_penumpang ORDER BY id_penumpang DESC LIMIT 0,1";
		$mydata = $this->execute($query);
		$row = mysqli_fetch_array($mydata);
		// ID OTOMATIS//***************************************************
		$awal = substr($row['id_penumpang'], 3, 4) + 1;
		if ($awal < 10) {
			$auto = 'IP00' . $awal;
		} elseif ($awal > 9 && $awal <= 99) {
			$auto = 'IP0' . $awal;
		} else {
			$auto = 'IP' . $awal;
		}

		return $auto;
	}
	function insertPenumpang($nama_penumpang, $jk, $ttl, $no_hp, $alamat)
	{
		$id_penumpang = $this->idPenumpang();
		$query = "insert into tbl_penumpang values ('$id_penumpang', '$nama_penumpang', '$jk', '$ttl', '$no_hp', '$alamat')";
		return $this->execute($query);
	}
	// function idUser(){
	// 	$query = "SELECT * FROM tbl_user ORDER BY id_user DESC LIMIT 0,1";
	//       $mydata = $this->execute($query);
	//       $row= mysqli_fetch_array($mydata);
	//       // ID OTOMATIS//***************************************************
	//       $awal=substr($row['id_user'],3,4)+1;
	//       if($awal<10){
	//         $auto='ID00'.$awal;
	//       }elseif($awal > 9 && $awal <=99){
	//         $auto='ID0'.$awal;
	//       }else{
	//         $auto='ID'.$awal;
	// 	  }

	// 	  return $auto;

	// }
	function insertUser($username, $email, $password)
	{
		$id_user = $this->idPenumpang();
		$level = 'pengunjung';
		$query = "insert into tbl_user values ('$id_user', '$username', '$level', '$email', '$password')";
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
