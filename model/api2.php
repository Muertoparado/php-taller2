<?php
// Encontrar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


header("Content-Type: application/json"); 
$_DATA = json_decode(file_get_contents("php://input"), true);
$METHOD = $_SERVER["REQUEST_METHOD"];
switch($METHOD) {
    case "POST":
    foreach($_DATA as $key => $value){
        if(!is_numeric($value)){
            $res=[
                "numero"=>"Dato no mumerico (Error)"
            ];
        }else{
            $res=[
                "numero"=>parImpar($value)
            ];
        }
    }
}
function parImpar($num){
    if($num>=0){
         if($num%2==0){
            return 'par';
        }else{
            return 'impar';
        }
    }else{
        return 'El dato a evaluar no puede ser negativo';
    }
}
echo  json_encode($res, JSON_PRETTY_PRINT);

?>