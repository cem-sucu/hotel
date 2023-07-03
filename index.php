<?php 

spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name . '.php';
});

// cree hotel
$hotel1 = new Hotel("Hilton **** Strasbourg", " 10 rue de la Gare ", 30);


// affciher hotel
$hotel1->afficherInfos();

?>