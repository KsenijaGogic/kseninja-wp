<?php
require_once('Mandrill.php');
$apiKey = 'LViAHKPrFFI6s6snOccByg';
$mandrill = new Mandrill($apiKey);


$request = $mandrill->messages->send($_POST['data']['message'], false, 'Main Pool', '');

print_r(json_encode($request));
