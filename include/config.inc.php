<?php        
// SITE_ROOT contains the full path to the tshirtshop folder
define("SITE_ROOT", dirname(dirname(__FILE__)));

// Settings needed to configure the Smarty template engine
define("SMARTY_DIR", SITE_ROOT."/libs/smarty/");//print_r(SMARTY_DIR);exit;
define("TEMPLATE_DIR", SITE_ROOT."/templates");
define("COMPILE_DIR", SITE_ROOT."/templates_c");
define("CONFIG_DIR", SITE_ROOT."/configs");
// these should be true while developing the web site        
define("IS_WARNING_FATAL", true);                            
define("DEBUGGING", true);                                   
// settings about mailing the error messages to admin        
define("SEND_ERROR_MAIL", false);                            
define("ADMIN_ERROR_MAIL", "admin_mail@localhost");          
define("SENDMAIL_FROM", "errors@tshirtshop.com");            
ini_set("sendmail_from", SENDMAIL_FROM);                     
// by default we don't log errors to a file                  
define("LOG_ERRORS", false);                                 
define("LOG_ERRORS_FILE", "c:\\tshirtshop\\errors_log.txt"); // Windows
// define("LOG_ERRORS_FILE", "/var/tmp/tshirtshop_errors.log"); // Unix
// Generic error message to be diplayed instead of debug info
// (when DEBUGGING is false)                                 
define("SITE_GENERIC_ERROR_MESSAGE", "<h2>TShirtShop Error!</h2>");

?>           
