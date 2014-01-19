<?php
# Create fetch url url
if (isset($_GET["station"])) {
    $url = "http://188.117.35.14/TrainRSS/TrainService.svc/stationInfo?station=" . $_GET["station"];
} else if (isset($_GET["train"])) {
    $url = "http://188.117.35.14/TrainRSS/TrainService.svc/trainInfo?train=" . $_GET["train"];
} else {
    return;
}

# Setup curl fetch
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

# Retrieve data
$output = curl_exec($ch);
curl_close($ch);

# Return data
echo $output;
?>