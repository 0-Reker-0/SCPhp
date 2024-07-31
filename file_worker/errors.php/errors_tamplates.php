<?php
class errors_templates_filer
{
    protected static string $none_key = "<p class 'error'>Cunstruct error: 
                    File module not take construct data. You nead set full patch name.</p>";
    protected static string $null_key = "<p class 'error'>Cunstruct error: 
                    File module not take construct data. You nead set array key from patches.</p>";
    protected static string $call_method_dir = "<p class 'error'>Initialisation error: call'd unknown method</p>";
    protected static function file_exist(string $mess):string
    {return "<p class 'error'>Uploading error: this file exist, rename from: ".$mess."</p>";}
    protected static function not_uploadet(string $mess):string
    {return "<p class 'error'>Uploading error: file do not uploadet from site.  File name: ".$mess."</p>";}
    protected static string $a = "<p class 'error'></p>";
}