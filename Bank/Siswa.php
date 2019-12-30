<?php 
	class Siswa{
		public $nama;
		public $nilai;
		public $sekolah = "STT NF";

		public function __construct($nama, $nilai){
			$this -> nama = $nama;
			$this -> nilai = $nilai;
		}

		public function getHasil(){
			if ($this -> nilai > 55){
				return "LULUS UYY";
			}else{
				return "NOOB";
			}
		}
	}


	$siswa1 = new Siswa();
	$siswa1 -> nama = "Budi";
	$siswa1 -> nilai = 12;
	echo "Nama siswa : " . $siswa1 -> nama;
	echo "<br>Kuliah di : " . $siswa1 -> sekolah;
	echo "<br>Nilai : " . $siswa1 -> nilai;
	echo "<br>" . $siswa1 -> nama . " dengan nilai " . $siswa1 -> nilai . " dinyatakan " . $siswa1 ->getHasil();
	
 ?>