<?php
require 'lib/lib-html.php';

$contenu = "<h1>PAGE 1</h1>";
$contenu .= lienHTML("page2.php", "Lien vers Page 2");

require 'modeles/modele.php';