<?php  

echo "---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br><br>";  
echo "VARIABLES<br><br>";
// Variable Integer  
$numeroEntero = 10;  
// Variable Float  
$numeroDecimal = 0.5234;  
// Variable String  
$texto = "Mi primer PHP";  
// Variable Boolean  
$esVerdadero = false;  
// Variable Array  
$arrayCiudad = array("Quito", "Cuenca", "Guayaquil");  
// Mostrando los valores  
echo "| Variable Integer: $numeroEntero\n |";  
echo "Variable Float : $numeroDecimal\n |";  
echo "Variable String: $texto\n |";  
echo "Variable Boolean: " . ($esVerdadero ? 'VERDADERO' : 'FALSO') . "\n |";  
echo "Variable Array Ciudad: [" . implode(", ", $arrayCiudad) . "\n ]|";  

echo "<br><br>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br><br>";  
echo "<br>OPERACIONES ARITMETICAS<br><br>";


// Realizar operaciones aritméticas  
$suma = $numeroEntero + $numeroDecimal;  
$multiplica = $numeroEntero * $numeroDecimal;  

// Mostrar resultados  
echo "La suma: $numeroEntero + $numeroDecimal = $suma<br><br>";  
echo "La multiplicación: $numeroEntero x $numeroDecimal = $multiplica<br>";  


echo "<br><br>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br><br>";  
echo "<br>MANIPULACION DE CADENAS<br><br>";

// Cadenas
$caden1 = "Hola";  
$caden2 = " mundo"; 
echo "Cadena 1: $caden1\n <br>";  
echo "Cadena 2: $caden2\n <br><br>";  
// Concatenar cadenas 
$texto = $caden1 . $caden2;  
echo "Concatenar cadenas: " . $texto . "\n<br><br>";  

// Longitud de la cadena  
$longitud_cadena = strlen($texto);  
echo "La longitud de la cadena es: " . $longitud_cadena . "\n<br>";  

echo "<br><br>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br><br>";  
echo "<br>USO DE CONDICIONES<br><br>";

$esVerdadero = false; // true = verdadero : false = falso

echo "Seleccionó: " . ($esVerdadero ? 'true' : 'false') . "\n <br><br>";  

if ($esVerdadero) {  
    echo "Mi condición ahora es verdadera.<br>";  
} else {  
    echo "Mi condición ahora es falsa.<br>";  
}  

echo "<br><br>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br><br>";  
echo "<br>CREACION DE UN ARRAY<br><br>";

$arrayCiudad = array("Quito", "Cuenca", "Guayaquil");  

echo "Ciudades: [" . implode(", ", $arrayCiudad) . "\n ]<br><br>";  
// Mostrar un elemento específico de mi arreglo usando su índice  posiciones inicia desde 0
$indice = 0; 
echo "Mi indice seleccionado: $indice<br>"; 
echo "la ciudad en el indice $indice es: " . $arrayCiudad[$indice];  

echo "<br><br>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br><br>";  
?>  