<?php

function brainGcdFunc(): array
{
    $numbA = random_int(1, 50);
    $numbB = random_int(1, 50);
    //$result = $numbB;
    $question = "{$numbA} {$numbB}";

    while (true) {
        $tmp = $numbA;
        $numbA = $numbB;
        $numbB = $tmp % $numbB;
        if ($numbB === 0) {
            $result = $numbA;
            break;
        }
    }

    $array = [];
    $array['question'] = $question;
    $array['result'] = (string)$result;
    return $array;
}
