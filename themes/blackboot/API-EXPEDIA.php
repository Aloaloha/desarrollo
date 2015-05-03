<?php
$secret = '2g3p6leqjr34';
$host = 'http://api.ean.com/';

// build path
$ver = 'v3/';
$method = 'list/';
$path = "ean-services/rs/hotel/{$ver}{$method}";

// query parameters
$apiKey = '4mlq80s02q7oh1m98g1ub2hr6l';
$cid = '487679';
$minorRev = '[currentMinorRev]';
$customerUserAgent = 'Mozilla/4.0';
//$customerIpAddress = '188.76.188.81';
$locale = 'es_ES';
$currencyCode = 'EUR';
$hotelId = '130062';

$timestamp = gmdate('U');
$sig = md5($apiKey . $secret . $timestamp);

$query = "?apikey={$apiKey}&cid={$cid}&sig={$sig}&minorRev={$minorRev}"
. "&customerUserAgent={$customerUserAgent}&customerIpAddress={$customerIpAddress}"
. "&locale={$locale}&currencyCode={$currencyCode}&xml=<HotelListRequest><destinationString>Granada</destinationString><RoomGroup><Room><numberOfAdults>2</numberOfAdults></Room></RoomGroup></HotelListRequest>";

// initiate curl
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $host . $path . $query);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept:application/json'));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
$headers = curl_getinfo($ch);

// close curl
curl_close($ch);

// return XML data
if ($headers['http_code'] != '200') {
 echo "An error has occurred.";
return false;
} else {
 echo $data;
 return($data);
}
?>
