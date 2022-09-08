<?php

header("Content-type: application/json; charset=UTF-8");

$algo = '';
$value = '';

if (isset($_GET['value'])) {
    $value = htmlspecialchars($_GET['value'], ENT_QUOTES);
}

switch ($_GET['algo']) {
    case 'PASSWORD_DEFAULT':
        $algo = PASSWORD_DEFAULT;
        break;

    case 'PASSWORD_BCRYPT':
        $algo = PASSWORD_BCRYPT;
        break;

    case 'PASSWORD_ARGON2I':
        $algo = PASSWORD_ARGON2I;
        break;

    default:
        $algo = PASSWORD_DEFAULT;
        break;
}

echo json_encode(
    ['hash' => password_hash($_GET['value'], $algo)]
);
