
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <h1>Ejercicio 6</h1>
        <form method="POST" action="api6.php">
            <input type="number" name="cantidad" placeholder="Cantidad estudiantes">
            <input type="submit" value="enviar">
        </form>
    </div>

    <?php
/* <!-- Construir el algoritmo en phhp para un programa
para cualquier cantidad de estudiantes que lea el nombre,
el sexo y la nota definitiva y halle al estudiante con la mayor
nota y al estudiante con la menor nota y cuantos eran
hombres y cuantos mujeres. --> */



/* header("Content-Type: application/json"); 
$_DATA = json_decode(file_get_contents("php://input"), true);
$METHOD = $_SERVER["REQUEST_METHOD"];
switch($METHOD) {
case "POST": */

if($_POST){
   // $cantidad=5;
    $nombre=[];
    $edad=[];

    $cantidad=$_POST["cantidad"];
    for ($i=1; $i < $cantidad+1 ; $i++) {
        echo " <br><input type='text' name='nombre{$i}' placeholder='nombre{$i}'><br>
        <input type='number' name='edad{$i}' placeholder='edad{$i}'><br>
        <select name='sexo{$i}'>
            <option value='femenino'>Femenino</option>
            <option value='masculino'>Masculino</option>
        </select><br>";
        
    }
    echo "<br><input type='submit' value='registrar'>";
    if($_POST['registrar']){
        $nombrex[$i]= array($_POST["nombre{$i}"]);
        array_push($nombre,$nombrex[$i]);
        $edad[$i]= array($_POST["edad{$i}"]);
        print_r($nombre);
        print_r($edad);

        $edadMax= max($edad);
        $edadMin= min($edad);
        $posicionArrMax=array_search($edadMax,$edad);
        $posicionArrMin=array_search($edadMin,$edad);
        $nombreMax=array_values($nombre)[$posicionArrMax];
        $nombreMin=array_values($nombre)[$posicionArrMin];
    }
}

?>
</body>
</html>

