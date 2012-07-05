<?

ini_set( 'display_errors', 'On' );
error_reporting( E_ALL );

require 'libs/smarty/Smarty.class.php';
require 'libs/class/db_connect.class.php';

$smarty = new Smarty;

$smarty->compile_check = 0;
$smarty->debugging = 0;
//var_dump($db_connect);






?>