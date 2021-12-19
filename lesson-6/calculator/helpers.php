<?php

if (!function_exists('assets')) {
    function assets($path)
    {
        return '/assets/' . $path;
    }
}