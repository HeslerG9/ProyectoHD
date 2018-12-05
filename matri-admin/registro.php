<?php
$archivo = fopen("../bd-json/carrera.json","a+");
$arreglo=array ();

$arreglo["codigoCarrera"]= $_POST["codigoCarrera"];
$arreglo["codigoCentroEstudio"]= $_POST["codigoCentroEstudio"];
$arreglo["nombreCarrera"]= $_POST["nombreCarrera"];
$arreglo["codigoFacultad"]= $_POST["codigoFacultad"];
$arreglo["codigoDepartamento"]= $_POST["codigoDepartamento"];
$arreglo["CantidadAsignaturas"]= $_POST["CantidadAsignaturas"];
$arreglo["CantidadUv"]= $_POST["CantidadUv"];
$arreglo["grado"]= $_POST["grado"];

fwrite($archivo, json_encode($arreglo)."\n");
echo json_encode($arreglo);
fclose()



?>


