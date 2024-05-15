<?php

class Route
{
    public static function Redirect($routeName)
    {
        Header("Location: {$routeName}");
        exit;
    }
}
