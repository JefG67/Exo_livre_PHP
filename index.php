
<?php 
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});
// Pour dire au fichier de recuperer automatiquement toute les classe des autres fichiers


$auteurUn = new Auteur("King", "Stephen");
$livreUn = new Livre("Ca", 1138, 1986, 20, $auteurUn);
$livreDe = new Livre("Simetierre", 374, 1983, 15, $auteurUn);
$livreTr = new Livre("Le fléau", 823, 1978, 14, $auteurUn);
$livreQu = new Livre ("Shining", 447, 1977, 16, $auteurUn);
$livreCi = new Livre ("Test", 300, 1970, 10, $auteurUn);

echo $auteurUn->afficherBibliographie();



