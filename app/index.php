<?

ini_set( 'display_errors', 'On' );
error_reporting( E_ALL );

require '../libs/smarty/Smarty.class.php';
require '../libs/class/db_connect.class.php';

$smarty = new Smarty;

$smarty->compile_check = 0;
$smarty->debugging = 0;
//var_dump($db_connect);

	$smarty->display('header.tpl');
  $smarty->display('menu.tpl');

  if(isset($_GET['o'])){
  
    switch ($_GET['o']) {
      
      case 'home':
        //$smarty->assign("regulamin", $regulamin);
    		$smarty->display('home.tpl');
      break;
      
      case 'pisma':
        //$smarty->assign("regulamin", $regulamin);
    		$smarty->display('pisma.tpl');
      break;
      
      case 'sprzet':
        //$smarty->assign("regulamin", $regulamin);
    		$smarty->display('sprzet.tpl');
      break;
      
      case 'magazyn':
        //$smarty->assign("regulamin", $regulamin);
    		$smarty->display('magazyn.tpl');
      break;
      
      default:
      
        $smarty->display('home.tpl');
      
      break;
  
      }
    
    }else{
    
      //$smarty->assign("regulamin", $regulamin);
    	$smarty->display('home.tpl');
    
    }
  
  $smarty->display('footer.tpl');
  
  
?>