<?php
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$password = $_POST['password'];

echo htmlspecialchars($_POST['pseudo']);
echo htmlspecialchars($_POST['email']);

$bdd = new PDO('mysql:host=localhost; dbname=cerebro', 'root', '');

$req = $bdd->prepare('INSERT INTO members (pseudo, email, password) VALUES (:pseudo, :email)');

$req -> execute (array(
    'pseudo'=> $pseudo,
    'email' => $email,
    'password' => $password
))
?>