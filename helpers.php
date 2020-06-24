<?php

function env($name)
{
    $file = file_get_contents(__DIR__ . '/.env');
    $settings = explode(PHP_EOL, $file);
    foreach ($settings as $item) {
        $data = explode('=', $item);
        if (isset($data[0]) && $data[0] === $name) {
            return $data[1] ?? null;
        }
    }
}
