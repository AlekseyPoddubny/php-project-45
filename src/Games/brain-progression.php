<?php

function brainProgressionFunc(): array
{
    $count = random_int(7, 10);
    $index = random_int(1, 50);
    $step = random_int(1, 5);
    $findX = random_int(1, $count - 1);

    $results = [];
    for ($j = 0; $j <= $count; $j++) {
        $results[] = $index + $step * $j;
    }

    $result = $results[$findX];
    $results[$findX] = "..";
    $question = implode(" ", $results);

    $array = [];
    $array['question'] = $question;
    $array['result'] = (string)$result;
    return $array;
}
