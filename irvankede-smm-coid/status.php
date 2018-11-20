<?php
include ('api-irvankede-smm.php');

// cek status pesanan
$status = $api->status('1107'); // 123 = id pesanan
print_r($status);
?>