<?php
require_once('../sql.php');
// Récupération des champs du formulaire

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$age = $_POST['age'];
$telephone = $_POST['telephone'];
$password = $_POST['password'];
/*$ville = $_POST['ville'];
$adresse = $_POST['adresse'];
$codepostal = $_POST['codepostal'];*/
$pass_hash = password_hash($password, PASSWORD_DEFAULT);

if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($age) && !empty($telephone) && !empty($password)) {

    $reponse = $bdd->prepare("INSERT INTO utilisateurs(nom, prenom, email, age, telephone, password) VALUES (?,?,?,?,?,?)");

    $reponse->execute(array($nom, $prenom, $email, $age, $telephone, $pass_hash));
    
    //Logs
    //$req_logs = ("INSERT INTO logs(user_id,type_log,action, date) VALUES ($id_encours, 'Insertion', 'A créé le compte: $nom $prenom ($email)', '$today')");
    //$bdd->exec($req_logs);
    Header('location: ../../default.php?action=success');
} 
else
{
    Header('location: ../../register.php?action=erreur');
}