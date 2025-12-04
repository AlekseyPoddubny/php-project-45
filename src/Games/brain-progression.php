<?php

// Путь, который будет использован при глобальной установке пакета
$autoloadPath1 = __DIR__ . '/../../../../autoload.php';
// Путь для локальной работы с проектом
$autoloadPath2 = __DIR__ . '/../../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

function brain_progression_func(): array
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
