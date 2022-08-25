<?php

$to = $emailUsuario;

$subject = 'Registro | Verificación'; 
$message = '
 
¡Bienvenid@ a Ambrosía!
El último paso es la verificación de tu cuenta. Solo tenes que hacer click en el siguiente link:

 
https://agssoft.ar/DOS/check.php?user='.$nombreUsuario.'&email='.$emailUsuario.'
 
';
                     
$headers = 'From:noreply@Ambrosía.com' . "\r\n";
mail($to, $subject, $message, $headers);


?>