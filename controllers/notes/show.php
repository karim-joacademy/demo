<?php

$config = require "./utils/config.php";
$db = new Database($config["database"]);

$currentUserId = 1;
$name = "Note";

$note = $db->query('select * from notes where id = :id', [
    "id" => $_GET["id"]
])->fetch();

if(!$note)
{
    abort();
}

if($note['user_id'] !== $currentUserId)
{
    abort(Response::FORBIDDEN);
}

require("./views/notes/show.view.php");

