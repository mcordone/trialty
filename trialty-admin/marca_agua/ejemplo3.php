<?php
require_once('imageworkshop.php');

/* "imageFromPath" => "../../images/propiedades/product-143-01.jpg", */
 
$norwayLayer = new ImageWorkshop(array(
    "imageFromPath" => "../../images/propiedades/product-143-01.jpg",
));
 
$watermarkLayer = new ImageWorkshop(array(
    "imageFromPath" => "../login/images/header_peque.png",
));

$watermarkLayer->opacity(60);

$norwayLayer->addLayer(1, $watermarkLayer, 12, 12, "LB");
 
$image = $norwayLayer->getResult();
header('Content-type: image/jpeg');
 
imagejpeg($image, null, 95); 

imagepng($image, '../login/images/header_peque2.jpg');


//BORRAR IMAGEN ANTERIOR
// imagedestroy($image);



