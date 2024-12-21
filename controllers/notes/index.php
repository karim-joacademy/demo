<?php

$config = require "../../utils/config.php";
$db = new Database($config["database"]);

$name = "Notes";

try {
    $getAllNotesQuery = "SELECT * FROM notes WHERE user_id = 2";
    $notes = $db->query($getAllNotesQuery)->fetchAll();
} catch (Exception $e) {
    die("An error occurred while fetching the notes: " . $e->getMessage());
}

require("views/notes/index.view.php");
