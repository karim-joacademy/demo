<?php

require "utils/functions.php";
require "utils/Database.php";
//require "utils/router.php";

$config = require "utils/config.php";

$db = new Database($config["database"]);

$posts = $db->query("SELECT id FROM posts")->fetchAll(PDO::FETCH_ASSOC);

Dump_Die($posts);
