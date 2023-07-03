<?php 

class Hotel{
    private string $nom;
    private array $chambres;
    private array $reservations;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
        $this->chambres = [];
        $this->reservations = [];
    }

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

    public function afficherReservations() {
        foreach ($this->reservations as $reservation) {
            echo "Réservation pour le client " . $reservation->getClient()->getNom() . " " . $reservation->getClient()->getPrenom() . " :\n";
            echo "Date de début : " . $reservation->getDateDebut() . "\n";
            echo "Date de fin : " . $reservation->getDateFin() . "\n";
            echo "Chambre : " . $reservation->getChambre()->getNumChambre() . "\n\n";
        }
    }

    public function afficherStatutChambres() {
        foreach ($this->chambres as $chambre) {
            $statut = ($chambre->estOccupee()) ? "Occupée" : "Libre";
            echo "Chambre " . $chambre->getNumChambre() . " : " . $statut . "\n";
        }
    }

    public function afficherInfos(){
        echo "<h3>".$this->getNom() ."</h3>";
    }
    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}


?>