<?php
/**
 * if
 * if/else
 * if/elseif/else
 * switch
 * for loop
 * while loop
 * foreach
 */

/**
 * Note
 * -There is no alternative-syntax or template syntax for a do-while-loop.
 */

$fruit = 'apple';

# if (with curly braces)
if ($fruit == 'apple') {
    echo 'This is apple.';
}
# if (without curly braces)
if ($fruit == 'apple') :
    echo 'This is apple.';
endif;


# if/else (with curly braces)
if ($fruit == 'apple') {
    echo 'This is apple.';
} else {
    echo 'This is not apple.';
}
# if/else (without curly braces)
if ($fruit == 'apple') :
    echo 'This is apple.';
else :
    echo 'This is not apple';
endif;


# if/elseif/else (with curly braces)
if($fruit == 'apple') {
    echo 'This is apple.';
} elseif($fruit == 'orange') {
    echo 'This is oringe';
} else {
    echo 'This is not apple and orange.';
}
# if/elseif/else (without curly braces)
if($fruit == 'apple'):
    echo 'This is apple.';
elseif($fruit == 'orange'):
    echo 'This is oringe';
else:
    echo 'This is not apple and orange.';
endif;

# switch (with curly braces)
switch($fruit) {
    case 'apple': 
    echo 'This is apple.';
    break;

    default: 
    echo 'This is not apple';
    break;
}
# switch (without curly braces)
switch($fruit):
    case 'apple': 
    echo 'This is apple.';
    break;

    default: 
    echo 'This is not apple';
    break;
endswitch;

# for loop (with curly braces)
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
# for loop (without curly braces)
for ($i = 1; $i <= 10; $i++):
    echo $i;
endfor;

# while loop (with curly braces)
$i = 1;
while ($i <= 10) {
    echo $i++; 
}
# while loop (without curly braces)
$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;

# foreach loop (with curly braces)
$arr = [1, 2, 3, 4];
foreach ($arr as $a) {
    echo $a;
}
# foreach loop (without curly braces)
$arr = [1, 2, 3, 4];
foreach ($arr as $a):
    echo $a;
endforeach;


