<?php 

class Reservation{
    private string $dateDebut;
    private string $dateFin;
    private Chambre $chambre;
    private Client $client;

    public function __construct(string $dateDebut, string $dateFin, Chambre $chambre, Client $client)
    {
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->chambre = $chambre;
        $this->client = $client;
    }

    public function getDateDebut(): string {
        return $this->dateDebut;
    }

    public function setDateDebut(string $dateDebut): void {
        $this->dateDebut = $dateDebut;
    }

    public function getDateFin(): string {
        return $this->dateFin;
    }

    public function setDateFin(string $dateFin): void {
        $this->dateFin = $dateFin;
    }

    public function getChambre(): Chambre {
        return $this->chambre;
    }

    public function setChambre(Chambre $chambre): void {
        $this->chambre = $chambre;
    }

    public function getClient(): Client {
        return $this->client;
    }

    public function setClient(Client $client): void {
        $this->client = $client;
    }
}


?>