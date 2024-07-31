<?php
class reworker_array_Net
{
    public static function rework(array $data):array
    {
        $returned = array();
        foreach ($data as $rec) {
            array_push($returned, htmlspecialchars($rec));
        }
        return $returned;
    }
}