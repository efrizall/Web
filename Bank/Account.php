<?php 
	class Account{
		public $nama;
		public $nomor;
		public $saldo;

		public function __construct($no, $saldo){
			$this -> nomor = $no;
			$this -> saldo = $saldo;
		}

		public function deposit($jumlah){
			echo "<br>Tambah deposit = " . $jumlah;
			$this -> saldo = $this -> saldo + $jumlah;
		}

		public function withDraw($uang){
			echo "<br>Menarik = " . $uang;
			$this -> saldo = $this -> saldo - $uang;
		}

		public function cetak(){
			echo "<br>Saldo sekarang = " . $this -> saldo;
			echo "<br><br>";
		}

	}

	// $budi = new Account();
	// $budi -> nomor = 1;
	// $budi -> saldo = 3000;
	// $budi1 = $budi -> deposit(5000);
	// echo "<br>" . $budi1;


 ?>