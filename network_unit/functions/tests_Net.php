<?php
class extender_tests_Net {
    use href_test;
    use types_test;
}

class tests_Net extends extender_tests_Net 
{
    public static function test_href(string $url):bool
    {
        return self::init_href_test($url);
    }

    public static function test_type(string $type):bool
    {
        return self::init_test_type($type);
    }
    public static function test_type_returned(string $type):string
    {
        return self::test_type_return($type);
    }
}