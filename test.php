<?php
require '/Meli/meli.php';
$meli = new Meli('3606372242098310', 'kfSp2qpShUWLagiVzSTQClGwGM20PHnT');

$redirectUrl = $meli->getAuthUrl("https://webcomm.herokuapp.com/test.php",Meli::$AUTH_URL['MLM']);

if($_GET['code']){
echo '$_GET['code']';
else{
echo 'pasale perrouuu <br/>'
echo 'link: <a href="'.$redirectUrl.'">link de prueba</a>';
}



?>
