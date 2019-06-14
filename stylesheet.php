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

header("Content-type: text/css; charset: UTF-8");
header("Cache-Control: must-revalidate");
$offset = (60 * 60); // Amendable and optional - see line below
$ExpStr = "Expires: ".gmdate("D, d M Y H:i:s", time() + $offset)." GMT";
header($ExpStr);


  //=========//
 // ADD CSS //
//=========//

echo 'body {display: grid;}'."\n";
echo 'body {color: rgb(255, 255, 255);}'."\n";
echo 'body {background-color: rgb(191, 0, 0);}'."\n\n";

echo 'h1::after {
content: "'.$Server_Side_Variable.'\";
}'."\n\n";

?>
