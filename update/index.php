<?php

set_time_limit(0);
ini_set('display_errors',true);//Just in case we get some errors, let us know....

$curl = curl_init();
$file = fopen("feed.xml", 'w+');
curl_setopt($curl, CURLOPT_URL, "ftp://url.to/feel.xml"); #input
curl_setopt($curl, CURLOPT_USERPWD, "username:password");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FILE, $file); #output
if(curl_exec($curl) === false)
{
    echo 'Curl error: ' . curl_error($curl);
}
else
{
    echo 'Operation completed without any errors';
}

curl_close($curl);

fclose($file);

?>