<?php

 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="Student"; 
 $header=$view; 
switch ($view) {
	case 'list' :
		$content    = 'events.php';		
		break;

	default :
		$content    = 'events.php';		
}
require_once ("../templates/template.php");
?>