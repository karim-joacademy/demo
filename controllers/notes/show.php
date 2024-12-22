<?php

$config = require "./utils/config.php";
$db = new Database($config["database"]);
$id = $_GET["id"];
$name = "Note";
try
{
    $note = $db->query('select * from notes where id = ' . $id)->fetch();
}
catch (Exception $e)
{
    die($e);
}

require("./views/notes/show.view.php");

