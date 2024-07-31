<?php
class errors_filer extends errors_templates_filer
{
    public static function init(string $code, string $mess = null):string|bool
    {
        switch ($code){
            case 'null_key': 
                return self::$null_key;
            case 'none_key':
                return self::$none_key; 
            case 'call_method_dir':
                return self::$none_key;
            case 'file_exist':
                return self::file_exist($mess);
            case 'not_uploadet':
                return self::not_uploadet($mess);
            default:
                return false;
        }
    }
}