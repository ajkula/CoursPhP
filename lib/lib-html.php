<?php



function lienHTML($href, $contenu, array $attributs = []){
    $attributs['href'] = $href;
    $html = baliseHTML("a", $contenu, $attributs);
        
    return $html;

//    return "<a href=\"$href\">$contenu</a>";
}

function baliseHTML($balise, $contenu, array $attributs = []){

    $html = "<$balise ";
    
    foreach ($attributs as $key=>$val){
        $html .= " $key=\"$val\"";
    }
    
    $html .= ">$contenu</$balise>";
    
    return $html;

//    return "<a href=\"$href\">$contenu</a>";
}