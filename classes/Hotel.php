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

    public function afficherHotel(): string
    {
        return "
        Nombre de chambres : " . count($this->chambres) . "<br>
        Nombre de chambres réservées : " . count($this->reservations) . "<br>
        Nombre de chambres disponibles : " . $this->chambreDispo() . "<br> 
        <br>";
    }




    public function afficherReservations() {
        foreach ($this->reservations as $reservation) {
            echo "Réservation pour le client " . $reservation->getClient()->getNom() . " " . $reservation->getClient()->getPrenom() . " :\n";
            echo "Date de début : " . $reservation->getDateDebut() . "";
            echo "Date de fin : " . $reservation->getDateFin() . "";
            echo "Chambre : " . $reservation->getChambre()->getNumChambre() . "";
        }
    }

    public function afficherStatutChambres() : void {
        foreach ($this->chambres as $chambre) {
            $statut = ($chambre->estOccupee()) ? "Réservé" : "Disponible";
            echo "Chambre " . $chambre->getNumChambre() . " : " . $statut . "<br>";
        }
    }

    public function afficherInfos(){
        echo "<h3>".$this->getNom() ."</h3>";
    }



}


?>