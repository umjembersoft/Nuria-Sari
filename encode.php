<?php

//header("Content-Type: application/json");
echo json_encode(array("Nama"=>"Nuria sari")) . "\n";
$data = new stdClass();
$data ->alamat = "Dusun krajan lor RT/RW 001/012 Desa Sukoreno Kec.Umbulsari";
$data ->Nohp = "085730699585";
$data ->TempatLahir = "Cibinong Bogor";
$data ->TanggalLahir ="03-7-1993";
echo json_encode($data) . "\n";//konversi data array tadi menjadi "semuah string" dengan format json.

?>
