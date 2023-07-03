<?php

spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});

$hotelStrasbourg = new Hotel("Hilton **** Strasbourg");
$hotelParis = new Hotel("Regent **** Paris");

$chambre1 = new Chambre("17", 2, 120.0, false, $hotelStrasbourg);
$chambre2 = new Chambre("3", 2, 120.0, false, $hotelStrasbourg);
$chambre3 = new Chambre("4", 2, 120.0, false, $hotelStrasbourg);

$hotelStrasbourg->afficherInfos();

$hotelStrasbourg->ajouterChambre($chambre1);
$hotelStrasbourg->ajouterChambre($chambre2);
$hotelStrasbourg->ajouterChambre($chambre3);

$client1 = new Client("Virgile", "GIBELLO", "1990-01-01");
$client2 = new Client("Micka", "MURMANN", "1995-05-10");

$reservation1 = new Reservation("01-01-2021", "2021-01-01",$chambre1, $client1);
$reservation1->setClient($client1);
$reservation1->setChambre($chambre1);

$reservation2 = new Reservation("2021-03-11", "2021-03-11", $chambre2, $client2);
$reservation2->setClient($client2);
$reservation2->setChambre($chambre2);

$reservation3 = new Reservation("2021-04-01", "2021-04-01", $chambre3, $client2);

$reservation3->setClient($client2);
$reservation3->setChambre($chambre3);

$client1->ajouterReservation($reservation1);
$client2->ajouterReservation($reservation2);
$client2->ajouterReservation($reservation3);

$hotelStrasbourg->afficherReservations();

$hotelParis->afficherReservations();

$client1->afficherReservations();
$client2->afficherReservations();

$hotelStrasbourg->afficherStatutChambres();
?>
