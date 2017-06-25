
<?php


$ruta = "../images/propiedades/test2.jpg";
$nombre = "test2.jpg";

if (file_exists($ruta)){

//ESTA ES LA MARCA DE AGUA
require_once('marca_agua/imageworkshop.php');


//ESTE ES LA FOTO 
$norwayLayer = new ImageWorkshop(array(
    "imageFromPath" => $ruta,
));
//ESTE ES LA FOTO 



 //ESTA ES LA FOTO
 $photou = "login/images/header_peque.png";
$photo = new ImageWorkshop(array(
     "imageFromPath" => $photou,
));

$norwayLayer->addLayer(1, $photo, 15, 15, "RB");
 //ESTA ES LA FOTO


 
$image = $norwayLayer->getResult();
//header('Content-type: image/jpeg');
 
//imagejpeg($image, null, 95); 
//$nombre = $_FILES['imagen']['name'];
 //$nombre_arte = "arte-".$id_producto.'.jpg';
imagepng($image, $ruta);
//imagepng($image, 'header_peque2.jpg');


//BORRAR IMAGEN ANTERIOR
// imagedestroy($image);


}

?>