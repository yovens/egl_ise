
<?php
$host = 'localhost'; // ou l'adresse de votre serveur
$dbname = 'eglise';
$username = 'root';  // votre nom d'utilisateur MySQL
$password = 'dions2003';      // votre mot de passe MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>