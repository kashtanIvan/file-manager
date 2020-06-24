<?php
spl_autoload_register(function ($class) {
    if ($class == 'RouterLite' && file_exists(__DIR__ . '/' . $class . '.php')) {
        include __DIR__ . '/' . $class . '.php';
    }
    if (file_exists(__DIR__ . '/app/Controllers/' . $class . '.php')) {
        include __DIR__ . '/app/Controllers/' . $class . '.php';
    }
    if (file_exists(__DIR__ . '/app/Database/'.$class. '.php')) {
        include __DIR__ . '/app/Database' . '/' . $class . '.php';
    }
    if (file_exists(__DIR__ . '/app/views/Render/'.$class. '.php')) {
        include __DIR__ . '/app/views/Render' . '/' . $class . '.php';
    }
    if (file_exists(__DIR__ . '/app/Models/'.$class. '.php')) {
        include __DIR__ . '/app/Models' . '/' . $class . '.php';
    }
});
