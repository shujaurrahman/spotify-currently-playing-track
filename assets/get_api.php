
<?php
 $curl = curl_init();
 $headr = array();
 $headr[] = 'Accept: application/json';
 $headr[] = 'Content-type: application/json';
 $headr[] = 'Authorization: Bearer AQCwZlkGfHYkKGRWXVB7i59LqQX0hzzmM725w-Vpwg9BFzDYJJrgfWKIwh9baiRj9LhoiVSFWdnrTii3EaYN7_3M_XJ0YnnHvHlBvNoEmHyjZHPnRQa1OEMdDbC8NbPGDdDH8-O_Hc_a5780weT8lTkNNwUVmEyHyJ5MPjnlOj6E';
 curl_setopt($curl, CURLOPT_URL,"https://api.spotify.com/v1/me/player/currently-playing");
 curl_setopt($curl, CURLOPT_HTTPHEADER,$headr);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
 curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
 $response = curl_exec($curl);
 if($e = curl_error($curl)) {
    echo $e;
} else {
    // Return API Data 
    echo $response;
}
 curl_close($curl);
?>