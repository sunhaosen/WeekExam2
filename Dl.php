<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/25
 * Time: 8:59
 */
class Dl
{
    private static $dl = null;
    private function __construct()
    {

    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    public static function Instance()
    {
        if (!(self::Instance() instanceof dl))
        {
            self::Instance() new dl;
        }
    }
}