<!--Resolver el ejercicio con la arquitectura propuesta en clase.

Declarar una clase “Mascota” con las siguientes propiedades (Básicas): Id,  Nombre, Raza, 
Declarar una clase "DueñoMascota" con las siguientes propiedades (Básicas): Id, Nombre, Apellido, Documento, Celular, Dirección.
A la clase Mascota, se le debe agregar la clase DueñoMascota como propiedad (Dueño). Además agregarle un método que imprima sus propiedades y todas las propiedades del dueño.
Luego en un archivo llamado index.php instanciar la clase Mascota, completar sus propiedades.
Instanciar la clase DueñoMascota, completar sus propiedades, y asignar el dueño a la mascota. Finalmente llamar al método que imprime las propiedades de la clase Mascota.-->
<?php
require_once "modelos/mascotas.php";
require_once "modelos/DuenioMascota.php";
//Instancia Mascota//
$m = new  Mascotas();
$m->Id = 1;
$m->Nombre = "Kirly";
$m->Raza = "Dogo";
//Instancia Dueño//
$dm = new  DuenioMascota();
$dm->Id = 1;
$dm->Nombre = "Arturo";
$dm->Apellido = "Vidal";
$dm->Email = "ArturitoVidal@Macmail.com";
$dm->Documento = 39804233;
$dm->Celular= 1190903241;
$dm->Direccion= "Cordoba 986";

$m->DuenioMascota = $dm;


$m->MostrarDatos();
?>
