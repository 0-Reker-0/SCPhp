<?php
trait templates_json_Net
{
    protected static function json_start(
        array $data,
        string $href
    )
    {
        $options = array(
            CURLOPT_URL => $href,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
            CURLOPT_POSTFIELDS => json_encode($data),
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