<?php

require "utils/functions.php";
require "utils/Database.php";
require "utils/router.php";

$config = require "utils/config.php";

$db = new Database($config["database"]);

$id = $_GET["id"];

$getAllQuery = "SELECT id FROM users";
$getByIdQuery = "SELECT * FROM users WHERE id = :id";

$posts = $db->query($getAllQuery)->fetchAll(PDO::FETCH_ASSOC);
//$post = $db->query($getByIdQuery, [":id" => $id])->fetch(PDO::FETCH_ASSOC);

Dump_Die($posts);
//Dump_Die($post);
