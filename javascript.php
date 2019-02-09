<?php

  //=================//
 // ERROR REPORTING //
//=================//

error_reporting(E_ALL);
ini_set('display_errors', 1);


  //===============//
 // BUILD HEADERS //
//===============//

ob_start ("ob_gzhandler");
header("Content-type: application/javascript; charset: UTF-8");
header("Cache-Control: must-revalidate");
$offset = (60 * 60);
$ExpStr = "Expires: ".gmdate("D, d M Y H:i:s", time() + $offset)." GMT";
header($ExpStr);


  //================//
 // Add JAVASCRIPT //
//================//

echo 'console.log(\'This is an example of a\');'."\n";
echo 'console.log(\'Javascript file powered up using PHP\');'."\n";
echo 'console.log(\'in which it is possible to display '.$Server_Side_Variable.' and run all sorts of tricks.\');'."\n";

?>
