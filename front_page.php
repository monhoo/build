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

if (isset ($_GET["CartAction"]))
{
	ob_start();
echo(include("presentation/truck_front.php"));
$truck = new TruckFront();
echo ($application->display('presentation/templates/truck_front.tpl'));
echo'<div style="width:20px;height:30px;" class="bg-danger">iopopoipiop</div>';
echo(file_get_contents("presentation/templates/truck_front.tpl"));
flush();
ob_flush();
ob_end_clean();
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