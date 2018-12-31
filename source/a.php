<?php

// made by @ilhamkwr
function request($url){
 
   if (!function_exists('curl_init')){ 
      die('CURL is not installed!');
   }
 
   // kendali curl
   $ch= curl_init();
 
   // setel permintaan url
   curl_setopt($ch, 
      CURLOPT_URL, 
      $url);
 
   // kembali respons, jangan print/echo
   curl_setopt($ch, 
      CURLOPT_RETURNTRANSFER, 
      true);
 
   /*
   Untuk menemukan lebih banyak opsi dari curl:
   http://www.php.net/curl_setopt
   */		
 
   $response = curl_exec($ch);
 
   curl_close($ch);
 
   return $response;
}

function printArray($array, $spaces = "")
{
   $retValue = "";
	
   if(is_array($array))
   {	
      $spaces = $spaces
         ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
      $retValue = $retValue."<br/>";
      foreach(array_keys($array) as $key)
      {
         $retValue = $retValue.$spaces
            ."<strong>".$key."</strong>"
            .printArray($array[$key], 
               $spaces);
      }		
      $spaces = substr($spaces, 0, -30);
   }
   else $retValue = 
      $retValue." - ".$array."<br/>";
	
   return $retValue;
}

?>