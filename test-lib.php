<?php
require 'lib/lib-html.php';

echo lienHTML(
        "http://www.google.fr", 
        "GOOGLE", 
        ['target' => 'blank',
            'style' => 'color: green']);

echo"<br>";echo"<br>";echo"<br>";

echo baliseHTML(
        "div", 
        "Mon article pepere, pepere, pepere,\nPepere pepere pepere\nPepere pepere pepere", 
        ['style' => 'color: red']);