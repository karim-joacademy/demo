<?php

function Dump_Die($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function isActiveUrl($url) {
    return $_SERVER['REQUEST_URI'] === $url;
}