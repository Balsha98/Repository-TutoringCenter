<?php

namespace Source\Handlers\Helpers\Classes;

use Source\Handlers\Core\Database\Database;

class Session
{
    public static function start()
    {
        if (PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function destroy()
    {
        if (PHP_SESSION_ACTIVE) {
            session_destroy();

            // Clear entire session storage.
            foreach (array_keys($_SESSION) as $key) {
                unset($_SESSION[$key]);
            }
        }
    }

    public static function get(string $key)
    {
        return $_SESSION[$key];
    }

    public static function getDb()
    {
        return Database::getInstance();
    }

    public static function set(string $key, mixed $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function is(string $key)
    {
        return (int) isset($_SESSION[$key]);
    }
}
