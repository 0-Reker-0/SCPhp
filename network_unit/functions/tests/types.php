<?php
trait types_test
{
    protected static array $types = [
        'json', 
        'JSON', 
        'rest',
        'REST'
    ];
    
    protected static function init_test_type(string $type_input):bool
    {
        foreach (self::$types as $type) {
            if ($type == $type_input) {
                return true;
            }
        }
        return false;
    }

    protected static function test_type_return(string $type_input):string
    {
        foreach (self::$types as $type) {
            if ($type == $type_input && ($type == 'json' || $type == 'JSON')) {
                return 'json';
            }
        }
        return 'rest';
    }
}