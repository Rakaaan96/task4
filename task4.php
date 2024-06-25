<?php

function decimalToBinary($decimal) {
    $binary = '';
    
    while ($decimal > 0) {
        $binary = ($decimal % 2) . $binary;
        $decimal = $decimal >> 1;
    }
    
    return $binary;
}

$decimal = 42;
$binary = decimalToBinary($decimal);

echo "Decimal: " . $decimal . "\n";
echo "Binary: " . $binary . "\n";
