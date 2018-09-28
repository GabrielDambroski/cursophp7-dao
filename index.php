<?php
require_once("config.php");


/////////////////
/// EXEMPLO-01///
/////////////////

$sql = new Sql();

$usuario = $sql->select("SELECT * FROM dbphp7");

echo json_encode($usuario);

echo("<br>");

$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

echo json_encode($arr);

//////////////////
/// EXEMPLO-02 ///
//////////////////
/*
$root = new Usuario();

$root->loadbyId(1);

echo $root;
*/


?>