<?php

$config = require "./utils/config.php";
$db = new Database($config["database"]);
$id = $_GET["id"];
$name = "Note";

$note = $db->query('select * from notes where id = ' . $id)->fetch();

if(!$note)
{
    abort();
}
$currentUserId = 1;

if($note['user_id'] != 1)
{
    abort(403);
}

require("./views/notes/show.view.php");

