<?php
class errors_Net extends errors_templates_net
{
    public static function init(string $code, string $mess = null):string|bool
    {
        switch ($code){
            case "type_error": 
                return self::$type_error;
            case "no_input_data":
                return self::$no_input_data;
            case "href_false":
                return self::$href_false;
            case "no_data":
                return self::$no_data;
            case "no_set_href":
                return self::$no_set_href;
            case "send_err":
                return self::send_err($mess);
            default:
                return false;
        }
    }
}