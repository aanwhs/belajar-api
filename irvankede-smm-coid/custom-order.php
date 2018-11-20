<?php
include ('api-irvankede-smm.php');

// membuat pesanan custom komentar
$order = $api->order(array(
	'service' => 1, // id layanan 
	'target' => 'linkpost', // target pesanan
	'custom_comments' => "wow keren\r\nkeren banget" // jumlah pesan
));
print_r($order);
print('<br /><br />');
?>