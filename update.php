<?php 

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
include "dbconnexion.php";
$nb_modifs=$cnx->exec("UPDATE students SET firstname='$firstname' ,lastname='$lastname' ,email='$email' phone='$phone' WHERE id='$id'");
echo $nb_modifs.'information est bien modifié!';
?>