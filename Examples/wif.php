<?php

require_once '../src/CPUchainPHP/CPUchainECDSA/CPUchainECDSA.php';

use CPUchainPHP\CPUchainECDSA\CPUchainECDSA;

$cpuchainECDSA = new CPUchainECDSA();
$cpuchainECDSA->generateRandomPrivateKey(); //generate new random private key

$wif = $cpuchainECDSA->getWif();
$address = $cpuchainECDSA->getAddress();
echo "Address : " . $address . PHP_EOL;
echo "WIF : " . $wif . PHP_EOL;

unset($cpuchainECDSA); //destroy instance

//import wif
$cpuchainECDSA = new CPUchainECDSA();
if($cpuchainECDSA->validateWifKey($wif)) {
    $cpuchainECDSA->setPrivateKeyWithWif($wif);
    $address = $cpuchainECDSA->getAddress();
    echo "imported address : " . $address . PHP_EOL;
} else {
    echo "invalid WIF key" . PHP_EOL;
}
