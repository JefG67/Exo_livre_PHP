
<?php 
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});



$auteurUn = new Auteur("King", "Stephen");
$livreUn = new Livre("Ca", 1138, 1986, 20, $auteurUn);
$livreDe = new Livre("Simetierre", 374, 1983, 15, $auteurUn);
$livreTr = new Livre("Le fléau", 823, 1978, 14, $auteurUn);
$livreQu = new Livre ("Shining", 447, 1977, 16, $auteurUn);

echo $auteurUn ;
echo"<br>";
echo $livreUn . "<br>" . $livreDe . "<br>" . $livreTr . "<br>" . $livreTr . "<br>" .$livreQu;


//video php 1 vers 1h10 pour cree une laison entre les pages / completer le toString de livre pour afficher les infos demander
