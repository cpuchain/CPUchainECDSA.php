<?php

require_once '../src/CPUchainPHP/CPUchainECDSA/CPUchainECDSA.php';

use CPUchainPHP\CPUchainECDSA\CPUchainECDSA;

$cpuchainECDSA = new CPUchainECDSA();
$cpuchainECDSA->generateRandomPrivateKey(); //generate new random private key
$address = $cpuchainECDSA->getAddress(); //compressed CPUchain address
echo "Address: " . $address . PHP_EOL;

//Validate an address (Verify the checksum)
if($cpuchainECDSA->validateAddress($address)) {
    echo "The address is valid" . PHP_EOL;
} else {
    echo "The address is invalid" . PHP_EOL;
}
