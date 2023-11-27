<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function ecrire($texte){
    print($texte);
}

$function_var = "ecrire";
$function_var("JOHNNY");

function ecrire2($texte1){
    print($texte1);
}

$function_var = "ecrire2";
$function_var(" sassiat");

function ecrire3($texte, $texte1){
    ecrire($texte);
    ecrire2($texte1);
}

$function_var = "ecrire3";
$function_var("johnny", " sassiat");

?>



</body>
</html>