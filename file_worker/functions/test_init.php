<?php
class test_init_filer 
{
    use select_patch_filer;
    
    public static function patch_test(
        string $mode,
        string $patch
    ):string|bool
    {
        switch($mode){
            case 'normal':
                return self::research($patch);
            case 'full':
                if(file_exists($patch))
                    return $patch;
                else
                    exit(errors_filer::init('none_key'));
            default:
                exit(errors_filer::init('call_method_dir'));
        }
    }

    private static function research(
        string $patch_name
    ):string
    {
        $test = self::select_patch($patch_name);
        $test == false ?
        exit(errors_filer::init('null_key')) :
        $returned = $test;

        return $returned;
    }
}