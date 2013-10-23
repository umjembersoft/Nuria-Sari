<?php
$urlsari = "http://graph.facebook.com/sari.muts1";
$dataku = json_decode(file_get_contents($urlsari), true);// MENGOLAH DATA BERFORMAT JSON
// true untuk menjadikannya array
print_r ($dataku) . "\n";
?>


