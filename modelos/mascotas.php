<?php
class Mascotas{
    public $Id;
    public $NombreMas;
    public $Raza;
    public $DuenioMascota;
   


    public function MostrarDatos() {
        echo "•ID: " . $this->Id ."<br>"
        ."•Nombre: " . $this->Nombre."<br>"
        ."•Raza: " . $this->Raza;

        echo '<br>'."•-----------------------• " .'<br>'
        ."•ID: " . $this->DuenioMascota->Id ."<br>"
        ."•Nombre: " . $this->DuenioMascota->Nombre. "<br>"
        ."•Apellido: " . $this->DuenioMascota->Apellido ."<br>"
        ."•DNI: " . $this->DuenioMascota->Documento ."<br>"
        ."•Celular: " . $this->DuenioMascota->Celular ."<br>"
        ."•Direccion: " . $this->DuenioMascota->Direccion; 
        
    }
}



?>
