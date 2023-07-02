<?php 

class Chambre{
    private  string $numChambre;
    private string $nombreLit;
    private float $prix;
    private bool $wifi;

    public function __construct(string $numChamb, string $nombre, float $prix, bool $wifi)
    {
        $this->numChambre = $numChamb;
        $this->nombreLit = $nombre;
        $this->prix = $prix;
        $this->wifi = $wifi;
    }
    

 // getter et setter de numChambre 
    public function getNumChambre()
    {
        return $this->numChambre;
    }
    public function setNumChambre($numChambre)
    {
        $this->numChambre = $numChambre;

        return $this;
    }

// getter et setter de nombreLit
    public function getNombreLit()
    {
        return $this->nombreLit;
    }
    public function setNombreLit($nombreLit)
    {
        $this->nombreLit = $nombreLit;

        return $this;
    }

// getter et setter de prix
    public function getPrix()
    {
        return $this->prix;
    }
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

// getter et setter de wifi
    public function getWifi()
    {
        return $this->wifi;
    } 
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }
}





?>