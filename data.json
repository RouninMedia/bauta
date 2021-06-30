<?php

  //*****************//
 // ERROR REPORTING //
//*****************//

error_reporting(E_ALL);
ini_set('display_errors', 1);


  //******************//
 // GZIP COMPRESSION //
//******************//

ob_start ("ob_gzhandler");


  //***************//
 // BUILD HEADERS //
//***************//

header("Content-type: application/json; charset: UTF-8");
header("Cache-Control: must-revalidate");
$offset = (60 * 60); // Amendable and optional - see line below
$Expires_Header = "Expires: ".gmdate("D, d M Y H:i:s", time() + $offset)." GMT";
header($Expires_Header);


  //**********//
 // ADD JSON //
//**********//

$My_JSON = '';

$My_JSON .= '{';
$My_JSON .= '"My_Statement_1": "This is an example of a JSON file",';
$My_JSON .= '"My_Statement_2": "made dynamic using PHP. So it\'s now possible",';
$My_JSON .= '"My_Statement_3": "to include any '.$Server_Side_Variable.' and all sorts of clever, dynamic tricks."';
$My_JSON .= '}';

echo $My_JSON;

?>
