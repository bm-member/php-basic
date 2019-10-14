<?php

// indexed array
$i = [1, 2, 3, 4, 5];

//associative_array
$a = [
    "foo" => "bar",
    "bar" => "foo",
];

//multidimensional_array
$m = [
    "foo" => "bar",
    "bar" => [1, 2, 3, 4, 5],
    "foobar" => [
            "foo" => "bar",
            "bar" => "foo",
        ]
    ];


echo $i[2];
echo '<br>';
echo $a['bar'];
echo '<br>';
echo $m['foobar']['foo'];

