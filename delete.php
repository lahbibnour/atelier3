<?php
include "dbconnexion.php";
$nb_supp = $cnx->exec("DELETE * FROM students ");
echo $nb_supp.'étudiant supprimée!'
?>