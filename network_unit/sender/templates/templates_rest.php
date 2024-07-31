<?php 
trait templates_rest_Net
{
    protected static function rest_start(
        array $data,
        string $href
    )
    {
        $options = array(
            CURLOPT_URL => $href,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => array('Content-Type: application/x-www-form-urlencoded'),
            CURLOPT_POSTFIELDS => http_build_query($data),
            CURLOPT_FAILONERROR => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_STDERR => fopen('../logs/errors.log',               'a'),
            CURLOPT_VERBOSE => true,
            CURLOPT_WRITEHEADER => fopen('../logs/log.log','a'),
            CURLOPT_COOKIEJAR => '../logs/coockie.log',

            CURLOPT_SSL_VERIFYSTATUS => true,
            //CURLOPT_SSL_VERIFYHOST => false,
            //CURLOPT_SSL_VERIFYPEER => false,
            //CURLOPT_PROXY_SSL_VERIFYPEER => false,

        );
    }
}