<?php
function squareNumbers() {
    var_dump('Generator starts');
    for ($i = 0; $i < 5; $i++) {
        var_dump($i . ' in series.');
        yield pow($i, 2);
    }
    var_dump('Generator ends.');
}

foreach (squareNumbers() as $number) {
    var_dump($number);
}

function squareNumbersTwo(int $start, int $end): Generator {
    for ($i = $start; $i <= $end; $i++) {
        yield pow($i, 2);
    }
}

foreach(squareNumbersTwo(1, 5) as $number) {
    var_dump($number);
}

function squareNumbersThree(int $start, int $end): Generator{
    for ($i = $start; $i <= $end; $i++) {
        yield $i => pow($i, 2);
    }
}

foreach (squareNumbersThree(1, 5) as $key => $value) {
    var_dump([$key, $value]);
}

function innerGenerator() {
    yield from [1, 2, 3, 4, 5];
}

foreach (innerGenerator() as $number) {
    var_dump($number);
}

function innerGeneratorTwo() {
    yield [1, 2, 3, 4, 5];
}

foreach (innerGeneratorTwo() as $number) {
    var_dump($number);
}