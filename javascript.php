<?php

  //=================//
 // ERROR REPORTING //
//=================//

error_reporting(E_ALL);
ini_set('display_errors', 1);


  //==================//
 // GZIP COMPRESSION //
//==================//

ob_start ("ob_gzhandler");


  //===============//
 // BUILD HEADERS //
//===============//

header("Content-type: application/javascript; charset: UTF-8");
header("Cache-Control: must-revalidate");
$offset = (60 * 60); // Amendable and optional - see line below
$Expires_Header = "Expires: ".gmdate("D, d M Y H:i:s", time() + $offset)." GMT";
header($Expires_Header);


  //================//
 // ADD JAVASCRIPT //
//================//

echo 'console.log(\'This is an example of a Javascript file\');'."\n";
echo 'console.log(\'made even more dynamic using PHP\; in which it is possible\');'."\n";
echo 'console.log(\'to display any '.$Server_Side_Variable.' and run all sorts of tricks.\');'."\n";

?>
