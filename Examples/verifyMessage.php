<?php

require_once '../src/CPUchainPHP/CPUchainECDSA/CPUchainECDSA.php';

use CPUchainPHP\CPUchainECDSA\CPUchainECDSA;

$cpuchainECDSA = new CPUchainECDSA();

//To verify a message like this one
$rawMessage = "-----BEGIN CPUCHAIN SIGNED MESSAGE-----
Test message
-----BEGIN SIGNATURE-----
1L56ndSQ1LfrAB2xyo3ZN7egiW4nSs8KWS
HxTqM+b3xj2Qkjhhl+EoUpYsDUz+uTdz6RCY7Z4mV62yOXJ3XCAfkiHV+HGzox7Ba/OC6bC0y6zBX0GhB7UdEM0=
-----END CPUCHAIN SIGNED MESSAGE-----";

if($cpuchainECDSA->checkSignatureForRawMessage($rawMessage)) {
    echo "Message verified" . PHP_EOL;
} else {
    echo "Couldn't verify message" . PHP_EOL;
}

// alternatively
$signature = "HxTqM+b3xj2Qkjhhl+EoUpYsDUz+uTdz6RCY7Z4mV62yOXJ3XCAfkiHV+HGzox7Ba/OC6bC0y6zBX0GhB7UdEM0=";
$address = "1L56ndSQ1LfrAB2xyo3ZN7egiW4nSs8KWS";
$message = "Test message";

if($cpuchainECDSA->checkSignatureForMessage($address, $signature, $message)) {
    echo "Message verified" . PHP_EOL;
} else {
    echo "Couldn't verify message" . PHP_EOL;
}
