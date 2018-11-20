<?php
include ('api-irvankede-smm.php');

// membuat pesanan
$order = $api->order(array(
	'service' => 1, // id layanan 
	'target' => 'sebastianwirajaya11', // target pesanan
	'quantity' => 100 // jumlah pesan
));
print_r($order);
print('<br /><br />');
?>