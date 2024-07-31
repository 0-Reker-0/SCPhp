<?php
class global_dir
{
    public static string $opend_elem;
    public static string $dir = __DIR__;
    public static string $site = 'GLib';
	
	public function __construct(string $dir, string $site)
	{
		self::$dir = $dir;
		self::$site = $site;
	}
}
?>