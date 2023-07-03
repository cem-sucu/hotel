<?php
class Chambre{
    private string $numChambre;
    private int $nombreLit;
    private float $prix;
    private bool $wifi;
    private Hotel $hotel;
    private array $reservations;
 
    public function __construct(string $numChamb, int $nombreLit, float $prix, bool $wifi, Hotel $hotel)
    {
        $this->numChambre = $numChamb;
        $this->nombreLit = $nombreLit;
        $this->prix = $prix;
        $this->wifi = $wifi;
        $this->hotel = $hotel;
        $this->reservations = [];
    }
    
    public function addReservation(Reservation $reservation) {
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

    public function getWifi(): bool {
        return $this->wifi;
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

    public function estOccupee() : bool {
        foreach ($this->reservations as $reservation) {
            $dateDebut = $reservation->getDateDebut();
            $dateFin = $reservation->getDateFin();
            $aujourdhui = date("Y-m-d");

            if ($aujourdhui >= $dateDebut && $aujourdhui <= $dateFin) {
                return true;
            }
        }

        return false;
    }
}


?>