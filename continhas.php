<?php

//recebe dados do formulario e faz os calculos

$ip1  = $_GET['ip1'];
$ip2  = $_GET['ip2'];
$ip3  = $_GET['ip3'];
$ip4  = $_GET['ip4'];
$masc = $_GET['masc'];

//$ip1 = 192;
//$ip2  = 165;
//$ip3  = 10;
//$ip4 = 105;
//$masc = 29;

$bits = 32 - $masc;

$ipsPorRede = pow(2, $bits);

$subredes = 256/$ipsPorRede;

$rede = (int)($ip4/$ipsPorRede);

$enderecoRede = $rede*$ipsPorRede;

$firstIP = $rede*$ipsPorRede + 1;

$broad = $enderecoRede+$ipsPorRede - 1;

$lastIP = $broad - 1;

$mascDecimal = 256 - $ipsPorRede;

function classeIP ($ip1)
{
    if ($ip1 <= 127) {
        return $classeIP = "A";
    } elseif ($ip1 <= 191) {
        return $classeIP = "B";
    } elseif ($ip1 <= 223) {
        return $classeIP = "C";
    } elseif ($ip1 <= 239) {
        return $classeIP = "D";
    } else {
        return $classeIP = "E";
    }
}

$classe = classeIP($ip1);


echo "<li>IPs por rede: {$ipsPorRede}</li>";
echo "<li>Sub-redes: {$subredes}</li>";
echo "<li>Rede: {$rede}</li>";
echo "<li>Endereço de rede: {$enderecoRede}</li>";
echo "<li>Broadcast: {$broad}</li>";
echo "<li>Primeiro IP: {$firstIP}</li>";
echo "<li>Último IP: {$lastIP}</li>";
echo "<li>Máscara: 255.255.255.{$mascDecimal}</li>";
echo "<li>Classe: {$classe}</li>";







