<?php 

function rupiah($total)
{
    return number_format($total, 0);
}

function transRekening($norek){
	$cab = substr($norek, 0, 3);
	$a = substr($norek, 3, 2);
	$b = substr($norek, 5, 2);
	$c = substr($norek, 7, -1);
	$d = substr($norek, -1);
	return $cab." ".$a.".".$b.".".$c."-".$d;
}

function transTanggal($tgl){
	$ex = explode("-", $tgl);
	
	$bln = $ex[1];

	switch ($bln)
	{
		case  1	: $bln = "Januari";break;
		case  2	: $bln = "Februari";break;
		case  3	: $bln = "Maret";break;
		case  4	: $bln = "April";break;
		case  5	: $bln = "Mei";break;
		case  6	: $bln = "Juni";break;
		case  7	: $bln = "Juli";break;
		case  8	: $bln = "Agustus";break;
		case  9	: $bln = "September";break;
		case 10	: $bln = "Oktober";break;
		case 11	: $bln = "November";break;
		case 12	: $bln = "Desember";break;
	}

	$tgl = $ex[2]." ".$bln." ".$ex[0];

	return $tgl;
}

function penyebut($nilai) {
	$nilai = abs($nilai);
	$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
	$temp = "";
	if ($nilai < 12) {
		$temp = " ". $huruf[$nilai];
	} else if ($nilai <20) {
		$temp = penyebut($nilai - 10). " belas";
	} else if ($nilai < 100) {
		$temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
	} else if ($nilai < 200) {
		$temp = " seratus" . penyebut($nilai - 100);
	} else if ($nilai < 1000) {
		$temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
	} else if ($nilai < 2000) {
		$temp = " seribu" . penyebut($nilai - 1000);
	} else if ($nilai < 1000000) {
		$temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
	} else if ($nilai < 1000000000) {
		$temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
	} else if ($nilai < 1000000000000) {
		$temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
	} else if ($nilai < 1000000000000000) {
		$temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
	}     
	return $temp;
}

function terbilang($nilai) {
	if($nilai<0) {
		$hasil = "minus ". trim(penyebut($nilai));
	} else {
		$hasil = trim(penyebut($nilai));
	}     		
	return $hasil." rupiah";
}

?>