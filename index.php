<?php
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"https://api.coinconvert.net/convert/BTC/USD?amount=0.00000010");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$data = curl_exec($ch);
curl_close($ch);
$data = json_decode($data);
echo "<pre>";
// print_r(number_format(($data->BTC),8,".",""));
$array = json_decode(json_encode($data), true);
print_r($array);
?>