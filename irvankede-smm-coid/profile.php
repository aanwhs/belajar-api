<?php
include ('api-irvankede-smm.php');

// cek profil
$profile = $api->profile();
print_r($profile);
print('<br /><br />');
?>