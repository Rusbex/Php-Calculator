<?php

if (empty($_GET['first']) || empty($_GET['second'])) {
    return 'Не переданы аргументы';
}
$first = $_GET['first'];
$second= $_GET['second'];

$expression = $first . ' ' . $_GET['operation'] . ' ' . $second.' = ';
switch ($_GET['operation']) {

    case '+':
        $result = $first + $second;
        break;

    case '-':
        $result = $first - $second;
        break;

    case '*':
        $result = $first * $second;
        break;

    case '/':
        $result = $first / $second;
        break;

    default:
        return 'Операция не поддерживается';
}

return $expression . $result;