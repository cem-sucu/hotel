<?php
class Chambre{
    private string $numChambre;
    private Hotel $hotel;
    private float $prix;
    private int $nombreLit;
    private bool $wifi;
    private bool $etat;
    private array $reservations;
 
    public function __construct(string $numChamb, Hotel $hotel, int $nombreLit, float $prix, bool $wifi, bool $etat)
    {
        $this->numChambre = $numChamb;
        $this->hotel = $hotel;
        $this->nombreLit = $nombreLit;
        $this->prix = $prix;
        $this->wifi = $wifi;
        $this->etat = $etat;
        $this->reservations = [];
    }
    
    public function addReservation(Reservation $reservation) :void {
        $this->reservations[] = $reservation;
    }

    public function getReservations(): array {
        return $this->reservations;
    }

    public function getNumChambre(): string {
        return $this->numChambre;
    }

    public function setNumChambre(string $numChambre): void {
        $this->numChambre = $numChambre;
    }

    public function getNombreLit(): int {
        return $this->nombreLit;
    }

    public function setNombreLit(int $nombreLit): void {
        $this->nombreLit = $nombreLit;
    }

    public function getPrix(): float {
        return $this->prix;
    }

    public function setPrix(float $prix): void {
        $this->prix = $prix;
    }

    public function hasWifi(): bool { // lorsque on utilise un bboolean la conventiion veut qu'on ecrive hasWifi() au lieu de setWifi()
        if($this->wifi === true){
            return "OUI";
        }else{
            return "NON";
        }
    }

    public function setWifi(bool $wifi): void {
        $this->wifi = $wifi;
    }

    public function getHotel(): Hotel {
        return $this->hotel;
    }

    public function setHotel(Hotel $hotel): void {
        $this->hotel = $hotel;
    }

    
// getter et setter etat pour la disponibilité/reservé chambre
    public function hasEtat() : string
    {
        if($this->etat===true ){
            return "Dsiponible";
           } else{
              return "Réservé";
           };
    }

    public function setEtat(Chambre $etat) : void
    {
       $this->etat = $etat;
    }

// methode toSyring()
    public function __toString()
    {
        echo "";
    }
}


?>