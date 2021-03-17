<?php
namespace App\Database\Type;

use Cake\Database\DriverInterface;
use Cake\Database\Type\BaseType;
use PDO;

class EnumType extends BaseType
{
    public function toPHP($value, DriverInterface $driver)
    {
        if ($value === null) {
            return null;
        }
        return explode(',',$value);
    }

    public function marshal($value)
    {
        if (is_array($value) || $value === null) {
            return $value;
        }
        return explode(',', $value);
    }

    public function toDatabase($value, DriverInterface $driver)
    {
        return implode(',',$value);
    }

    public function toStatement($value, DriverInterface $driver)
    {
        if ($value === null) {
            return PDO::PARAM_NULL;
        }
        return PDO::PARAM_STR;
    }
}