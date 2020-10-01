<?php

class REquest
{
    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}