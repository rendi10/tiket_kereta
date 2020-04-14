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

	//MODEL ADMIN
	function selectAll()
	{
		$query = "SELECT * FROM tbl_jadwal j JOIN tbl_kereta k ON k.id_kereta = j.id_kereta";
		$on = $this->execute($query);
		return $on;
	}

	function idJadwal()
	{
		$query = "SELECT * FROM tbl_jadwal ORDER BY id_jadwal DESC LIMIT 0,1";
		$mydata = $this->execute($query);
		$row = mysqli_fetch_array($mydata);
		// ID OTOMATIS//***************************************************
		$awal = substr($row['id_jadwal'], 3, 4) + 1;
		if ($awal < 10) {
			$auto = 'J00' . $awal;
		} elseif ($awal > 9 && $awal <= 99) {
			$auto = 'J0' . $awal;
		} else {
			$auto = 'J' . $awal;
		}

		return $auto;
	}

	function insertJadwal($id_kereta, $jam_berangkat, $jam_tiba, $harga, $dari, $tujuan)
	{
		$id_jadwal = $this->idJadwal();
		$query = "insert into tbl_jadwal values ('$id_jadwal','$id_kereta', '$jam_berangkat', '$jam_tiba', '$harga', '$dari', '$tujuan')";
		return $this->execute($query);
	}


	function updateJadwalModel($id_jadwal, $id_kereta, $jam_berangkat, $jam_tiba, $harga, $dari, $tujuan)
	{
		$query = "update tbl_jadwal set id_jadwal='$id_jadwal' id_kereta='$id_kereta', jam_berangkat='$jam_berangkat', jam_tiba='$jam_tiba', harga='$harga', dari='$dari', tujuan='$tujuan' where id_jadwal='$id_jadwal'";
		return $this->execute($query);
	}

	function selectJadwalUpdate($id_jadwal)
	{
		$query = "select * from tbl_jadwal where id_jadwal='$id_jadwal'";
		return $this->execute($query);
	}

	function hapusJadwalModel($id_jadwal)
	{
		$query = "delete from tbl_jadwal where id_jadwal='$id_jadwal'";
		return $this->execute($query);
	}


	//MODEL PENUM
	function selectAllPenum()
	{
		$query = "select * from tbl_penumpang";
		return $this->execute($query);
	}

	function selectAllPenumFetch()
	{
		$query = "select * from tbl_penumpang";
		$data = $this->execute($query);
		$penum = $this->fetch($data);
		return $penum;
	}

	function selectPenum($id_penumpang)
	{
		$query = "select * from tbl_penumpang where id_penumpang='$id_penumpang'";
		return $this->execute($query);
	}


	//MODEL KERETAAAAAA

	function selectAllKereta()
	{
		$query = "select * from tbl_kereta";
		$cek = $this->execute($query);
		return $cek;
	}

	//MODEL RESERVASI ADMIN

	function selectReservasi(){
		$query = "SELECT * FROM tbl_reservasi r JOIN tbl_penumpang p ON r.id_penumpang = p.id_penumpang";
		$cek = $this->execute($query);
		return $cek;
	}


	//MODEL PENUMPANGGGGGGG
	function selectJadwal()
	{
		$query = "SELECT * FROM tbl_jadwal j JOIN tbl_kereta k ON k.id_kereta = j.id_kereta";
		$on = $this->execute($query);
		return $on;
	}

	
	function otherPenumpang()
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
	function insertOtherPenumpang($nama_penumpang, $jk, $ttl, $no_hp, $alamat)
	{
		$id_penumpang = $this->idPenumpang();
		$query = "insert into tbl_penumpang values ('$id_penumpang', '$nama_penumpang', '$jk', '$ttl', '$no_hp', '$alamat')";
		return $this->execute($query);
	}
	function otherTransaksi($id_jadwal, $tanggal_berangkat)
	{
		$id_penumpang = $this->otherPenumpang();
		$id_reservasi = $this->idReservasi();
		$query = "INSERT INTO tbl_reservasi VALUES ('$id_reservasi', '$id_jadwal', '$id_penumpang', '$tanggal_berangkat')";
		return $this->execute($query);
	}
	function selectIdPenumpang($username)
	{
		$query = "SELECT id_user FROM tbl_user WHERE username='$username'";
		$id_penumpang = $this->execute($query);
		$rows = $this->fetch($id_penumpang);
		return $rows['id_user'];
	}

	function insertTransaksi($id_jadwal, $id_penumpang, $tanggal_berangkat)
	{

		$id_reservasi = $this->idReservasi();
		$query = "INSERT INTO tbl_reservasi VALUES ('$id_reservasi', '$id_jadwal', '$id_penumpang', '$tanggal_berangkat')";
		return $this->execute($query);
	}

	function idReservasi()
	{
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
	// function selectProfil($username)
	// {

	// 	$query = "SELECT id_user FROM tbl_user WHERE username='$username'";
	// 	$cek = $this->execute($query);
	// 	$rows = fetch($cek);
	// 	$row1 = $rows['id_user']; //mengambil id dari sesi
	// 	$pilih = "SELECT * FROM tbl_penumpang where id_penumpang='$row1'";
	// 	return $this->execute($pilih);
	// }

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
