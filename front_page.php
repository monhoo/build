<?php
// Activate session
session_start();

// Start output buffer
//ob_start();
// Include utility files
require_once ("include/config.php");
//require_once BUSINESS_DIR . 'error_handler.php';
// Set the error handler
//ErrorHandler::SetHandler();
// Load the application page template
require_once ("presentation/application.php");
require_once ("pesentation/link.php");


// URL correction
Link::CheckRequest();

// Load Smarty template file
$application = new Application();

if (isset ($_GET["AjaxRequest"]))
{
header('Expires: Fri, 25 Dec 1980 00:00:00 GMT'); // Time in the past
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: no-cache, must-revalidate');
header('Pragma: no-cache');
header('Content-Type: text/html');
if (isset ($_GET["CartAction"]))
{
$huudas='';
$huudas.= include("presentation/truck_front.php");

$huudas.= $application->display('presentation/templates/truck_front.tpl');
$huudas.= '<div style="width:20px;height:30px;" class="bg-danger">iopopoipiop</div>';
$huudas.= file_get_contents("presentation/templates/truck_front.tpl");
echo $huudas;

}
else{
trigger_error('CartAction not set', E_USER_ERROR);
}
}
else
{
//echo'<div style="width:20px;height:30px;" class="bg-success">sfdggdfgd</div>';
}


?>   