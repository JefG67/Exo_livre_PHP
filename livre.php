<?php


class Livre {
    private string $titre;
    private int $nbPages;
    private DateTime $anneeParution;
    private float $prix;
    private Auteur $auteur;


    public function __construct(string $titre, int $nbPages, string $anneeParution, float $prix, Auteur $auteur) {
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->anneeParution = new DateTime ($anneeParution);
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->addLivre($this);
        
    }

    public function getTitre() {
        return $this->titre;
    }
    public function setTitre(string $titre){
        $this->titre = $titre;
    }

    public function getNbPages() {
        return $this->nbPages;
    }
    public function setNbPages(int $nbPages){
        $this->nbPages = $nbPages;
    }

    public function getAnneeParution() {
        return $this->anneeParution;
    }
    public function setAnneeParution(datetime $anneeParution){
        $this->anneeParution = $anneeParution;
    }

    public function getPrix() {
        return $this->prix;
    }
    public function setPrix(float $prix){
        $this->prix = $prix;
    }

    public function getAuteur() {
        return $this->auteur;
    }
    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    public function __toString()
    {
        return $this->titre . " " .$this->anneeParution->format("Y") . " : " .$this->nbPages . " pages " . $this->prix . " €";
}

}



