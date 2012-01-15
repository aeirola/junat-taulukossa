<?php
$url = "http://188.117.35.14/TrainRSS/TrainService.svc/stationInfo?station=" . $_GET["station"];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
echo $output;
?>
