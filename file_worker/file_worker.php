<?php
/************************
*						*
*	File Worker Unit	*
*						*
************************/
class file_worker_extender
{
    use upload_filer;
}
class file_worker extends file_worker_extender
{
    protected static string $patch;
    public function __construct(
        string $href_key = null,
        string $mode = 'normal'
    )
    {
        self::$patch = test_init_filer::patch_test(
            $mode,
            $href_key
        );
    }
    
    public function upload(
        string $name,
        string $patch_uploded,
        string $new_name = null,
        bool $unique = true
    ):bool
    {
        if(file_exists(self::$patch.$name))
            exit(errors_filer::init('file_exist', $name));
        if(!is_uploaded_file($patch_uploded))
            exit(errors_filer::init('not_uploadet', $name));
        $new_name != null ?
        $write_name = $new_name :
        $write_name = $name;

        $unique == true ?
        $returned = self::upload_unique(
            self::$patch,
            $patch_uploded,
            $write_name
        ) :
        $returned = self::upload_normal(
            self::$patch, 
            $patch_uploded, 
            $write_name
        );

        return $returned;
    }

    
}