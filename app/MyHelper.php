<?php

 function abcd() {

    echo "hello world";
}



function get_country_from_ip() {

    $ip = Request::ip();

    $url="http://api.ipstack.com/103.217.234.79?access_key=3041d738ebc446266dccf133445fb0a3";
    // $url="http://api.ipstack.com/{$ip}?access_key=3041d738ebc446266dccf133445fb0a3";
    $ch = curl_init();
    // Disable SSL verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // Will return the response, if false it print the response
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Set the url
    curl_setopt($ch, CURLOPT_URL,$url);
    // Execute
    $result=curl_exec($ch);
    // Closing
    curl_close($ch);
    $data = json_decode($result,true);
    // dd($data);
     return $data;

}




