<?php
$c=curl_init("https://www.youtube.com/oembed?url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DkMWAUmlKDAE&format=json");
curl_setopt_array($c,[CURLOPT_RETURNTRANSFER=>1,CURLOPT_FOLLOWLOCATION=>1,CURLOPT_TIMEOUT=>10]);
$r=curl_exec($c);
echo "code=".curl_getinfo($c,CURLINFO_HTTP_CODE)."\nerr=".curl_error($c)."\nbody=".substr((string)$r,0,300)."\n";
