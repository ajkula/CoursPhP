<?php
require 'lib/lib-html.php';


$titre = "Page 2";
$lien = lienHTML("page1.php", "Lien vers Page 1");

// output buffering, stoquer en buffer
ob_start();
require 'modeles/vue-page.php';
$contenu = ob_get_clean(); // nettoie le buffer, si on le garde => ob_get_content

require 'modeles/modele.php';