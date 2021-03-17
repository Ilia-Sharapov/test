<?php
namespace App\Database\Type;

use Cake\Database\DriverInterface;
use Cake\Database\Type\BaseType;
use PDO;

class JsonType extends BaseType
{
    public function toPHP($value, DriverInterface $driver)
    {
        if ($value === null) {
            return null;
        }
        return json_decode($value, true);
    }

    public function marshal($value)
    {
        if (is_array($value) || $value === null || is_object($value)) {
            return $value;
        }
        return json_decode($value, true);
    }

    public function toDatabase($value, DriverInterface $driver)
    {
        return json_encode($value);
    }

    public function toStatement($value, DriverInterface $driver)
    {
        if ($value === null) {
            return PDO::PARAM_NULL;
        }
        return PDO::PARAM_STR;
    }
}