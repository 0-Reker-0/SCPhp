<?php
trait href_test
{
    protected static array $types = [
        'com',
        'ru',
        'ooo',
        'store',
        'org'
    ];
    
    protected static function init_href_test(string $test):bool
    {
        $move = explode('.', $test);
        $end = end($move);
        
        foreach (self::$types as $type) {
            if ($type == $end) {
                return true;
            }
        }
        return false;
    }
}