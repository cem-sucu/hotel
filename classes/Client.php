<?php 

class Client{
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;

    public function __construct(string $nom, string $prenom, DateTime $dateNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this-> dateNaissance = $dateNaissance;
    }

// getter et setter nom
    public function getNom()
    {
        return $this->nom;
    } 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

// getter et setter dateNaissance
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

// getter et setter prenom
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
}


?>