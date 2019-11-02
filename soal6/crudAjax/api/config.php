<?php

define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "db_crudajax");
define("DB_HOST", "localhost");
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

//cek db
if (!$mysqli) {
    echo 'error';
}
