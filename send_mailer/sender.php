<?php
class parametrs_SM extends templates_SM
{
	protected static string $to;
	protected static string $subject;
	protected static string $message;
	
	public function __construct(
		string $to = null, 
		string $subject = null
	)
	{
		$to == null ? 
			self::$to = self::$default_to : 
			self::$to = $to;
		$subject == null ? 
			self::$subject = self::$default_subject : 
			self::$subject = $subject;
	}
	
	public function init(
		array $data = null
	):bool
	{
		if($data != null){
			$mess = '';
			foreach($data as $row){
				$mess .= "\n".$row;
			}
			self::$message = $mess;
		}
		else{
			self::$message .= self::$start_template;
		}
		
		if(self::send())
			return true;
		else
			return false;
	}
	
	private static function send():bool
	{
		$send = mail(self::$to, self::$subject, self::$message);
		if ($send)
			return true;
		else
			return false;
	}
}