<?php
// Reference Smarty library
require_once ("../libs/smarty/Smarty.class.php");
/* Class that extends Smarty, used to process and display Smarty
files */
class Application extends Smarty
{
// Class constructor
public function __construct()
{
// Call Smarty's constructor
parent::Smarty();
// Change the default template directories
$this->template_dir = TEMPLATE_DIR;
$this->compile_dir = COMPILE_DIR;
//print_r($this->compile_dir);exit;
$this->config_dir = CONFIG_DIR;
//$this->debugging = true;
$this->plugins_dir[0] = "../libs/smarty/plugins";
$this->plugins_dir[1] = "/smarty_plugins";
}
}
?>