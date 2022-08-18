<?php 

$conexion= curl_init();

$arreglo=[
'userId'=>'6'
];

$data= http_build_query($arreglo);

curl_setopt($conexion, CURLOPT_URL,'https://jsonplaceholder.typicode.com/posts');
curl_setopt($conexion, CURLOPT_POST, true);
curl_setopt($conexion,CURLOPT_POSTFIELDS, $data);
curl_setopt($conexion,CURLOPT_RETURNTRANSFER,true);

$respuesta=curl_exec($conexion);

if(curl_errno($conexion))echo curl_errno($conexion);

else $decodificar= json_decode($respuesta,true);

foreach ($decodificar as $indice=>$valor){

echo "$indice:  ";
echo "$valor:  ";
}

curl_close($conexion);

?>