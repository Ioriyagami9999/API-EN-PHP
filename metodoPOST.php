<?php
header("HTTP/1.1 200");

if ($_SERVER['REQUEST_METHOD']=='POST'){
$nombre = "Edgardo Alan Martinez Miramontes";
echo "Un metodo POST     $nombre";
 
}else{

if ($_SERVER['REQUEST_METHOD']=='GET'){

 echo "Un metodo GET";
}

}




?>