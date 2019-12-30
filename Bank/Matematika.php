<?php 
	class Matematika{
		public static $counter = 100;
		const PHI = 3.14;

		public static function tambahkan($a, $b){
			return $a + $b;
		}

		public static function naikkanCounter(){
			self::$counter++;
		}

		public static function luasLingkaran($r){
			$luas = self::PHI * $r * $r;
			return $luas;
		}
	}

	Matematika::$counter++;
	echo "Counter sekarang : " . Matematika::$counter;
	$hasil = Matematika::tambahkan(5,3);
	echo "<br><b>5 + 3 = <b>" . $hasil;

	Matematika::naikkanCounter();
	echo "<br><br><b>Counter sekarang : <b>" . Matematika::$counter;

	$lingkaran = Matematika::luasLingkaran(8);
	echo "<br><br><b>Luas lingkaran r : 8 = <b>" . $lingkaran;
 ?>