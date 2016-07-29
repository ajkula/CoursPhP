<?php
$catalogue = array(
    array(
        'code' 		=> 7,
        'libelle' 	=> 'Infographiste'
    ),
    array(
        'code' 		=> 32,
        'libelle' 	=> 'Architecte logiciel'
    ),
    array(
        'code' 		=> 18,
        'libelle' 	=> 'Développeur front-end'
    ),
    array(
        'code' 		=> 19,
        'libelle' 	=> 'Développeur back-end'
    ),
    array(
        'code' 		=> 22,
        'libelle' 	=> 'Développeur full-stack'
    ),
);


$nbCatalogue = count($catalogue);
echo "<select>";

for($i=0; $i< $nbCatalogue; $i++){
    if($catalogue[$i]['code'] == 22){
        $select = "selected";
    } else {
        $select = "";
    }
    
    $catalogue[$i]['code'] == 22?$select="selected":$select = "";
    
    $select = $catalogue[$i]['code'] == 22?"selected":"";
    
    echo    "<option $select value=\"". 
            $catalogue[$i]['code']."\">".
            $catalogue[$i]['libelle']. "</option>" ;
    
}
echo "</select>";
