<?php 
	class Mail{

		/*$arg = [
			"email" => "email@";
			"subject" => "varyfay mail",
<?php 
	class Mail{

		/*$arg = [
			"email" => "email@";
			"subject" => "varyfay mail",
			"path" => "",
			"body" => "",
			"token" => ""

		];*/

		public function sendMail($arg)
		{



			$to = $arg['email'];
			$subject = $arg['subject'];
			if (isset($arg['path']) && isset($arg['token'])) 
			{
				$link = '<a href="https://mpos.com/'.$arg['path'].'?token='.$arg['token'].'">Click here</a>';
				$body = $link.$arg['body'];
			}
			else
			{
				$body = $arg['body'];
			}
				
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

				
			$headers .= 'From: MPOS <admin@mpos.com>' . "\r\n";

			return true;
				
			/*if (mail($to,$subject,$body,$headers)) {
				return true;
			}
			return false;*/
		}
	}
?>

