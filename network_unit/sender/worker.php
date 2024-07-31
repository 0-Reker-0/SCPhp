<?php
class extender_worker_Net
{
    use template_file_Net;
    use templates_json_Net;
    use templates_rest_Net;
}
class worker_Net extends extender_worker_Net
{
    public static $last_init;
    public static $last_info;
    public static $last_error;
    public static function init_worker_Net(array $input, object $initialisator)
    {
        $type = $input['type'];
        $data = $input['data'];
        $href = $input['href'];
        $method = $input['method'];
        self::$last_init = $initialisator;
        
        $method == 'normal' ?
        self::start($data, $type, $href) :
        template_file_Net::file_init($data, $href);

        self::$last_error = curl_error($initialisator);
        self::$last_info = curl_getinfo($initialisator);
        return;
    }

    private static function start(
        array $data, 
        string $type, 
        string $href
    ):void
    {
        $test = tests_Net::test_type_returned($type);
        $type == 'json' ?
        templates_json_Net::json_start($data, $href) :
        templates_rest_Net::rest_start($data, $href);
    }
}