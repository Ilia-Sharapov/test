<?php
namespace App\Functions;

trait SingletonTrait {
    private static $instance = null;

    private function __construct()
    {
    }
    private function __clone()
    {
    }
    private function __wakeup()
    {
    }

    public static function get()
    {
        return static::$instance ?? (static::$instance = new static());
    }
}