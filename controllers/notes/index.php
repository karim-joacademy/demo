<?php

$config = require "./utils/config.php";
$db = new Database($config["database"]);

$name = "Notes";

try
{
    $getAllNotesQuery = "SELECT * FROM notes WHERE user_id = 1";
    $notes = $db->query($getAllNotesQuery)->findAll();
}
catch (Exception $e)
{
    die("An error occurred while fetc   hing the notes: " . $e->getMessage());
}

require("./views/notes/index.view.php");
