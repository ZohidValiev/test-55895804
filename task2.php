<?php
$str = 'Давайте устроим встречу 20.05.2022 и потом ещё одну 12.06.2022';
// ЗДЕСЬ НУЖЕН КОД

$daysOfWeek = [
    'вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'
];
$pattern = '/(\d{2}\.\d{2}\.\d{4})/';
preg_match_all($pattern, $str, $matches, PREG_PATTERN_ORDER);

$result = [];
foreach ($matches[0] as $date) {
    $dayOfWeekIx = date('w', strtotime($date));
    $dayOfWeek = $daysOfWeek[$dayOfWeekIx];
    $result[$date] = "$date($dayOfWeek)";
}

$str = str_replace(array_keys($result), array_values($result), $str);

echo $str, PHP_EOL;
