<?php

//Арифметическая прогрессия

function arProg($first, $diff, $last) {
    if ($last <= $first) {
        echo $first . " ";
    } else {
        echo $first . " ";
        arProg($first + $diff, $diff, $last);
    }
}

arProg(2, 2, 50  ); //Результат: 2 4 6 8 10 12 14 16 18 20 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50

echo "<br>";


//Числа Фибоначчи

function fib($x, $a = 0, $b = 1) {
    if ($x >= 1) {
        echo $a . " ";
        fib($x - 1, $b, $a + $b);
    }
}

fib(20); //Результат: 0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 987 1597 2584 4181

echo "<br>";


//Вывод массива на подобии var_dump()

$arr = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
        "foo" => "bar",
        "bar" => "foo",
        "dimensional" => array(
            "aaa" => "foo",
            "foo" => "bar",
            42    => 24,
        )
    ),
    "test" => "bar",
    111    => 224
);


function arrayDump($array, $depth = 1) {
    if ($depth == 1) { echo '<b>Array:</b><br>'; }
    foreach ($array as $key => $value) {
        if(is_array($value)) {
            echo str_repeat("&nbsp;&nbsp;", $depth), '<b>', $key, ':</b><br>';
            arrayDump($value, $depth + 1);

        }
        else {
            echo str_repeat("&nbsp;&nbsp;", $depth), $key, ' = > ',  $value, '<br>';
        }
    }
}

arrayDump($arr);



//Подсчет кол-ва аргументов и возврат массива с результатом

function argTypeCounter(){
    $args = func_get_args();
    foreach ($args as $type) {
        $types[] = gettype($type);
    }
    var_dump(array_count_values($types)); //var_dump вместо return для наглядности
}

argTypeCounter('hello', 'world', '.', 55, $arr, NULL, 48.5, 'Bye');





