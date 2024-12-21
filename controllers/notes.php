<?php
$config = require "utils/config.php";

$db = new Database($config["database"]);

$id = $_GET["id"];

$getAllQuery = "SELECT id,name FROM users";
$getByIdQuery = "SELECT * FROM users WHERE id = :id";

$getAllQueryExecution = $db->query($getAllQuery);
$getByIdQueryExecution = $db->query($getByIdQuery, [":id" => $id]);

$fetchingUsers = $getAllQueryExecution->fetchAll(PDO::FETCH_ASSOC);
$fetchUser = $getByIdQueryExecution->fetch(PDO::FETCH_ASSOC);
$name = "Notes";

$notes = [];

require ("views/notes.view.php");