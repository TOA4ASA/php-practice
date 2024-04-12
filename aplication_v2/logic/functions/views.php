<?php

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('view/' . $path);
}

function logic($path, $attributes = [])
{
    extract($attributes);

    require base_path('logic/' . $path);
}