<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $host . $path . $query);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept:application/json'));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
$headers = curl_getinfo($ch);
//echo $data;
// close curl
curl_close($ch);
$decoded=  CJSON::decode($data);
$pathimagen='http://media.expedia.com';
echo '<div class="row-fluid">';
foreach ($decoded["HotelListResponse"]["HotelList"]["HotelSummary"] as $namee) 
   {
    

    echo '<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">';
    echo '<img src='.$pathimagen.$namee["thumbNailUrl"].' style="float: center;">';
    echo'<br>'; 
    echo '<h3 style="color: #cdaf0a;">'.$namee["name"].'</h3>';
    echo '<h4>Dirección = '.$namee["address1"].'</p>';
    echo '<h4>Ciudad= '.$namee["city"].'</p>';
    echo '<h4>Calidad= '.$namee["hotelRating"].' Estrellas</p>';
    echo '<h5>'.$namee["locationDescription"].'</p>';
    //0ooecho $namee["shortDescription"];
    echo '<br>';
    echo '<br>';
    echo'</div>';

   
    
    }
echo '</div>';