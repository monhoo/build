<?php
class TruckFront
{
public $mSiteUrl;

// Class constructor
public function __construct(){
$this->mSiteUrl = Link::Build('');
print_r($this->mSiteUrl);
}
// Initialize presentation object
public function init(){}


}
?>