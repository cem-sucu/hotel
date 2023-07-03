<?php 

class Hotel{
    private string $nom;
    private string $adresse;
    private int $totalChambre;

    public function __construct(string $nom, string $adresse, int $totalChambre)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->totalChambre = $totalChambre;
    }


// getter et setter de nom
    public function getNom() : string
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
// getter et setter de adresse
    public function getAdresse() : string
    {
        return $this->adresse;
    } 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

// getter et setter de totalChambre
    public function getTotalChambre() : int
    {
        return $this->totalChambre;
    }
    public function setTotalChambre($totalChambre)
    {
        $this->totalChambre = $totalChambre;

        return $this;
    }


    public function afficherInfos(){
        echo "<h2>". $this->getNom() ."</h2>"
        .$this->getAdresse() ."<br>"
        ." Nombre de chambre : ".$this->getTotalChambre() ."<br>";
    }
}



?>