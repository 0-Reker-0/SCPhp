<?php
trait upload_filer
{
    protected static function upload_normal(
        string $patch,
        string $patch_uploded,
        string $write_name
    ):bool
    {
        if(move_uploaded_file($patch_uploded, $patch.$write_name))
            return true;
        else
            return false;
    }
    protected static function upload_unique(
        string $patch,
        string $patch_uploded,
        string $write_name
    ):bool
    {
        if(move_uploaded_file($patch_uploded, $patch.uniqid($write_name.'_')))
            return true;
        else
            return false;
    }
}