<?php

$config = require "utils/config.php";
$db = new Database($config["database"]);

$name = "Notes";

$id = 1;

$getAllNotesQuery = "select * from notes where user_id = 2";
$notes = $db->query($getAllNotesQuery)->fetchAll();

require("views/notes/index.view.php");