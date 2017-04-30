<?php

 $nom = $_POST["nom"];

 $correu = $_POST["correu"];

 $edat = $_POST["edat"];

 $data = $_POST["data"];

 $contingut = $_POST["contingut"];

 $para = "ricard.alcaina@mataro.epiaedu.cat";
 $asunto = "Nuevo Mensaje de $nombre";
 
 $mensaje = "

 Nom del remitent: ".$nom."
 Correu: ".$correu."
 Edat: ".$edat."
 Data: ".$data."
 Missatge: ".$contingut."
 ";

 mail($para,$asunto,utf8_decode($mensaje));
 
 echo "<p><h2>El missatge s'ha enviat correctament!.</h2></p>";

?>