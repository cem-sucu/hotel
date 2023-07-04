<?php 

class Hotel{
    private string $nom;
    private string $address;
    private array $chambres;
    private array $reservations;

    public function __construct(string $nom, string $address)
    {
        $this->nom = $nom;
        $this->address = $address;
        $this->chambres = [];
        $this->reservations = [];
    }

// getter et setter nom
    public function getNom() : string
    {
        return $this->nom;
    }
    public function setNom(string $nom) : Hotel
    {
        $this->nom = $nom;

        return $this;
    }
// getter et setter de adresse
    public function getAddress() : string
    {
        return $this->address;
    }

    public function setAddress(string $address) : Hotel
    {
        $this->address = $address;

        return $this;
    }
    // methode ajouter chambre
    public function ajouterChambre(Chambre $chambre) {
        $this->chambres[] = $chambre;
    }

    public function getChambres(): array {
        return $this->chambres;
    }

   

    public function ajouterReservation(Reservation $reservation) {
        $this->reservations[] = $reservation;
    }

    public function getReservations(): array {
        return $this->reservations;
    }

    public function chambreDispo(): int
    {
        return count($this->chambres) - count($this->reservations);
    }

     // Afficher le nom
    public function afficherNom() : string 
    {
        return "$this->nom";
    }
    public function afficherHotel(): string
    {
        return "
        Nombre de chambres : " . count($this->chambres) . "<br>
        Nombre de chambres réservées : " . count($this->reservations) . "<br>
        Nombre de chambres disponibles : " . $this->chambreDispo() . "<br> 
        <br>";
    }



// afficher les reservation
    public function afficherReservations()
    {
        if (count($this->reservations) >= 1) {
            echo "<strong>Réservations de l'hotel : " . $this->nom . "</strong><br>";
            foreach ($this->reservations as $reservation) {
                echo $reservation->syntheseReservations() . "<br><br>";
            }
        } else {
            echo "<strong>Réservations de l'hôtel : " . $this->nom . "</strong>";
            echo "<br> Aucune réservation !!<br><br>";
        }
    }

    // Afficher statuts des chambres
    public function afficherStatutsChambres()
    {
        echo "Statuts des chambres de <strong>".$this->nom."</strong><br>";
        foreach ($this->chambres as $chambre) {
            echo "Chambre ".$chambre->getNumChambre()." ".$chambre->getPrix()." € ".$chambre->hasWifi()." ".$chambre->hasEtat()."<br>";
        }
    }

    public function __toString(): string
    {
        return "<h3>".$this->nom . "</h3>" . $this->address . "<br>
        Nombre de chambres : " . count($this->chambres) . "<br>
        Nombre de réservations : " . count($this->reservations) . "<br>
        Nombre de chambres disponibles : " . $this->chambreDispo() . "<br>
        <br>";
    }


}


?>