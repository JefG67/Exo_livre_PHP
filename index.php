
<?php 
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});



require_once 'Autoloader.php';
$livreUn = new Livre("Ca", 1138, 1986, 20, $auteur);
$auteurUn = new Auteur("King", "Stephen");

echo $auteurUn;


//video php 1 vers 1h10 pour cree une laison entre les pages / completer le toString de livre pour afficher les infos demander
