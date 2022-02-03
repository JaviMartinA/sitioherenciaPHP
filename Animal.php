<?php
abstract class Animal{
    public function comer(){
        echo "<p>Animal comiendo</p>";
    }
    protected function dormir($nombre){
        echo "<p> $nombre durmiendo</p>";
    }
}
