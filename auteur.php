<?php

class Auteur {
    //Attribut de ma classe
    private string $nom;
    private string $prenom;
    private array $livres;

    //Constructeur
    public function __construct(string $nom, string $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = [];
    }
    //setter and getter
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

    //Methode pour afficher la bibliographie complète d'un auteur c'est a dire toute la liste de ses livres
    public function afficherBibliographie() {

         $result = $this ; //initialise une variable avec la valeur $this = a la classe auteur dont on veut afficher la bibliographie
            
            foreach($this->livres as $livre){ //on utilise une boucle pour parcourir le tableau qui contient les livres ecrits par l'auteur
                $result = $result . $livre ."<br>"; 
            }
                
            return $result;
    }

   
    //Methode magique toString
    public function __toString()
    {
        return "<h1>Livres de " . $this->prenom . " " . $this->nom. "</h1>";    
    }
}


