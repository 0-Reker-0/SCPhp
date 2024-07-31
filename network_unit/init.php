<?php
/*
*
*
*
*/
class init_Net
{
    private static array $data;
    private static string $href;
    private static string $type;
    public function __construct(
        array $data = null,
        string $type = null,
        string $href = null
    )
    {
        if(tests_Net::test_type($type) == false)
            exit(errors_Net::init('type_error'));
        if(!isset($href))
            exit(errors_Net::init('no_set_href'));
        if(tests_Net::test_href($href) == false)
            exit(errors_Net::init('href_false'));
        if(empty($data))
            exit(errors_Net::init('no_data'));

        self::$data = reworker_array_Net::rework($data);
        self::$href = htmlspecialchars($href);
        self::$type = htmlspecialchars($type);
    }

    public function init(string $method = 'normal'):void
    {
        $init_curl = curl_init();
        $initialisation = worker_Net::init_worker_Net([
            'data' => self::$data,
            'type'=> self::$type,
            'href' => self::$href,
            'method'=> $method
            ],
            $init_curl
        );

        if($initialisation == false)
            self::debud_Net('error');

        curl_close($init_curl);
        return;
    }

    public static function init_fast(
        array $data = null,
        string $type = null,
        string $href = null,
        string $method = 'normal'
    ):void
    {
        $data = null ? 
        $input = self::$data : 
        $input = $data;

        $type = null ?
        $input_type = self::$type :
        $input_type = $type;

        $href = null ?
        $input_href = self::$href :
        $input_href = $href;

        if(
            $input == null ||
            $input_type == null || 
            $input_href == null
        )
            exit(errors_Net::init('no_input_data'));
        
        $init_curl = curl_init();
        $initialosation = worker_Net::init_worker_Net([
            'data' => $input,
            'type'=> $input_type,
            'href'=> $input_href,
            'method'=> $method
            ],
            $init_curl
        );

        if($initialosation == false)
            self::debud_Net('error');

        curl_close($init_curl);
        return;
    }

    public static function debud_Net(string $type):void
    {
        if($type == 'info')
            echo 'Last information: <b>'.worker_Net::$last_info.'</b>';
        else if($type == 'error')
            echo 'Last error: <b>'.worker_Net::$last_error.'</b>';
        return;
    }
}