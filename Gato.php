<?php
require_once('Animal.php');
class Gato extends Animal{
    public function comer(){
        echo "<p>Gato comiendo</p>";
    }
    public function protectedDormirgato($nombre){
        $this->dormir($nombre);
        
    }
}
