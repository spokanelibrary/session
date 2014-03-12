<?php

//ini_set('display_errors', true);
//error_reporting(E_ALL ^ E_NOTICE);
session_start();

header('Content-Type: application/json; charset=utf-8');

$callback='callback';

$json = json_encode($_SESSION['spl']['user']);

echo isset($_REQUEST[$callback])
        ? "{$_REQUEST[$callback]}($json)"
        : $json; 

?>