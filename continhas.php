<?php

//recebe dados do formulario e faz os calculos

//$prim = $_GET['ip1'];
//$seg  = $_GET['ip2'];
//$ter  = $_GET['ip3'];
//$quar = $_GET['ip4'];
//$masc = $_GET['masc'];

$ip1 = 192;
$ip2  = 165;
$ip3  = 10;
$ip4 = 105;
$masc = 29;

$bits = 32 - $masc;

$ipsPorRede = pow(2, $bits);

$subredes = 256/$ipsPorRede;

$rede = (int)($ip4/$ipsPorRede);

echo $rede;





