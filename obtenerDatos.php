<?php


$conexion= curl_init();

curl_setopt($conexion,CURLOPT_URL,'https://jsonplaceholder.typicode.com/posts');

$respuesta= curl_exec($conexion);

if(curl_errno($conexion))echo curl_erron($conexion);

else $decodificar= json_decode($respuesta,true);


curl_close($conexion);



?>