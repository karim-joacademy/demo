<?php

$config = require "./utils/config.php";
$db = new Database($config["database"]);

$name = "Create A Note";

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    $errors = [];
    $body = trim($_POST["body"]) ?? '';

    if (! Validator::validateStringLength($body))
    {
        $errors["body"] = "Body needs to be at least 1 char and no more than 100 chars.";
    }

    if (empty($errors))
    {
        $user_id = 4;
        $db->query("INSERT INTO notes (body, user_id) VALUES (:body, :user_id)",
            [
                "body" => $body,
                "user_id" => $user_id
            ]
        );
    }
}

require("./views/notes/create.view.php");