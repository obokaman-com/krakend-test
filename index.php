<?php

if (isset($_GET['status']) && 'ko' === $_GET['status']) {
    header('500 Internal Server Error', true, 500);
    die();
}

header('Content-Type: application/json');
echo '{"message": "Hello world"}';
