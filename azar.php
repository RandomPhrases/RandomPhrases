<?php
$frases = array(
1 => "Frase 1",
2 => "Frase 2",
);
$numero = rand(1,2);

echo "$frases[$numero]";
<input type="button" value="iniciar" onclick="document.location.reload();">
?>