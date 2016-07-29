<?php

var_dump($_FILES);

$destination = getcwd()."/image/".uniqid('image_');

switch ($_FILES['fichier']['type']){
    case 'image/png':
        $ext = '.png';
        break;
    case 'image/jpeg':
        $ext = '.jpg';
        break;
    
    default:
        $ext = NULL;
}

if (isset($ext)){
    $destination .= $ext;
    
if(!move_uploaded_file($_FILES['fichier']['tmp_name'], $destination)){
    echo 'telechargement impossible';
} else {
    echo 'telechargement reussi';
}
} else {
    echo 'les fichiers doivent etre des images PNG ou JPEG';
}
