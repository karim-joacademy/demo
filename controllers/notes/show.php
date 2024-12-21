<?php

$config = require "utils/config.php";
$db = new Database($config["database"]);

$name = "Note";

$noteId = $_GET["id"];

$currentUserId = 1;

$query = "SELECT * FROM notes WHERE user_id = : user_id AND id = :note_id";

// Execute the query with the parameters correctly bound
$note = $db->query($query, [
    "user_id" => $currentUserId,
    "note_id" => $noteId
])->fetch();

echo "hello";
require("views/notes/show.view.php");

