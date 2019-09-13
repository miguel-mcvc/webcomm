<?php
require 'Meli/meli.php';

$meli = new Meli('3606372242098310','kfSp2qpShUWLagiVzSTQClGwGM20PHnT');

$redirectUrl = $meli->getAuthUrl("https://webcomm.herokuapp.com/auth.php", Meli::$AUTH_URL['MLM']);

echo 'test 3';




?>
<p><a href="<?=$redirectURL;?>">Link</a></p>
