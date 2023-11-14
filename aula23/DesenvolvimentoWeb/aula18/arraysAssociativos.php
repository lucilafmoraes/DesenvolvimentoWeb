<?php

$pontos = ["Zé" => 11, "José" => 4, "Zéca" => 22];
echo "Zé: " .$pontos["Zé"]. "\n";
echo "José: " .$pontos["José"]. "\n";
echo "Zéca: " .$pontos["Zéca"]. "\n";

$pontos["Zéca"] += 1;
echo $pontos["Zéca"];


?>