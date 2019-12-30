<?php 
	require_once 'Account.php';

	class accountBank extends Account{
		public $nama_costumer;

		public function __construct($name, $no, $saldoAwal){
			parent::__construct($nama, $saldoAwal);
			$this -> nama_costumer = $name;
		}

		public function cetak(){
			parent::cetak();
			echo "Costumer : " . $this -> name;
		}

		public function transfer($objAcc, $uang){
			$objAcc -> deposit($uang);
			$this -> withDraw($uang);
		}
	}
 ?>