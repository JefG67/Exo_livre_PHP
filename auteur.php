<?php

class Auteur {
    private string $nom;
    private string $prenom;
    private array $livres;

    public function __construct(string $nom, string $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = [];
    }

    public function getNom() {
        return $this->nom;
    }
     public function setNom(string $nom) {
        $this->nom = $nom;
     }

    public function getPrenom() {
        return $this->prenom;
    }
    public function setPrenom(string $prenom){
        $this->prenom = $prenom;
    }
    
    public function getLivres() {
        return $this ->livres;
}
    public function setLivres($livres){
        $this->livres = $livres;
    }



    //Methode pour ajouter des livres dans mon tableau livre
public function addLivre(Livre $livre){
    $this->livres[] = $livre;


}


    public function __toString()
    {
        return "<h1>Livres de " . $this->prenom . " " . $this->nom. "</h1>";
    
        
}
}


