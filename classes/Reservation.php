<?php 

class Reservation {
    private int $chambreDispo;
    private int $chambreReserve;
    private int $nbreReservation;
    private DateTime $dateReservation;
    private string $nomHotel;
    private string $nomRerservation;
    
    public function __construct(int $chambreDispo, int $chambreReserve, int $nbreReservation, string $dateReservation, string $nomHotel, string $nomRerservation)
    {
        $this->chambreDispo = $chambreDispo;
        $this->chambreReserve = $chambreReserve;
        $this->nbreReservation = $nbreReservation;
        $this->dateReservation = new DateTime($dateReservation);
        $this->nomHotel = $nomHotel;
        $this->nomRerservation = $nomRerservation;

    }

// getter et setter chambreDispo
    public function getChambreDispo() : int
    {
        return $this->chambreDispo;
    }
    public function setChambreDispo($chambreDispo)
    {
        $this->chambreDispo = $chambreDispo;

        return $this;
    }

// getter et setter chambreReserve
    public function getChambreReserve() : int
    {
        return $this->chambreReserve;
    }
    public function setChambreReserve($chambreReserve)
    {
        $this->chambreReserve = $chambreReserve;

        return $this;
    }

// getter et setter nbreReservation
    public function getNbreReservation() : int
    {
        return $this->nbreReservation;
    } 
    public function setNbreReservation($nbreReservation)
    {
        $this->nbreReservation = $nbreReservation;

        return $this;
    }

// getter et setter dateReservation
    public function getDateReservation(): string
    {
        return $this->dateReservation->format("d-m-Y");
    }
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

// getter et setter nomHotel    
    public function getNomHotel() : string
    {
        return $this->nomHotel;
    }
    public function setNomHotel($nomHotel)
    {
        $this->nomHotel = $nomHotel;

        return $this;
    }

// getter et setter nomReservation
    public function getNomRerservation() : string
    {
        return $this->nomRerservation;
    }
    public function setNomRerservation($nomRerservation)
    {
        $this->nomRerservation = $nomRerservation;

        return $this;
    }
}


?>