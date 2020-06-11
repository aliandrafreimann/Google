<?php

$mysqli = new mysqli(
    "d82643.mysql.zonevs.eu",
    "d82643_mapuser",
    "123Ametikool789",
    "d82643_googlemap"
);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

echo 'Ühendus olemas';
