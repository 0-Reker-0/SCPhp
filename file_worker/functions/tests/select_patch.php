<?php
trait select_patch_filer
{
    use patches_filer;
    protected static function select_patch(string $key):string|bool
    {
        foreach(self::$patches as $test_key => $value){
            if($test_key == $key)
                return $value;
        }
        return false;
    }
}