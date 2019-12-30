<?php 
	require_once 'accountBank.php';

	$ef = new accountBank('Efrizal', 2, 1000);
	$ri = new accountBank('Rizal', 3, 2000);

	$ef -> cetak();
	echo "<br>";
	$ri -> cetak();

	$ef -> transfer($ri, 1000);
	$ri -> cetak();	
 ?>