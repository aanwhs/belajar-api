<?php
include ('api-irvankede-smm.php');

// daftar layanan
$services = $api->services();
print_r($services);
print('<br /><br />');
?>