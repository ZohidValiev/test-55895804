<?php

$symbols = [
    0, 1, 2, 3, 4, 5, 6, 7, 8, 9,
    'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 
    'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
];

function generateCaptcha(array $symbols, int $length = 6): string
{
    $result = "";
    $min = 0;
    $max = count($symbols) - 1;

    for ($i = 0; $i < $length; $i++) {
        $code = random_int($min, $max);
        $result .= $symbols[$code];
    }

    return $result;
}

$captcha = generateCaptcha($symbols);

echo $captcha, PHP_EOL;

