<?php

function Dump_Die($value)
{
    echo "<pre>";
            var_dump($value);
    echo "</pre>";

    die();
}

function getNavLinkClass($url): string {
    return $_SERVER['REQUEST_URI'] === $url
        ? "bg-gray-700 text-white"
        : "text-gray-300 hover:bg-gray-700 hover:text-white";
}

function defaultClasses()
{
    return "rounded-md px-3 py-2 text-sm font-medium ";
}

function authorize(bool $condition, int $status = Response::FORBIDDEN) : void
{
    if(!$condition)
    {
        abort($status);
    }
}