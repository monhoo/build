<?php
class TruckFront
{
public $mSiteUrl;
public $mMyWord;

// Class constructor
public function __construct(){
$this->mSiteUrl = Link::Build('');
$this->mMyWord = "this is freaking good";
//print_r($this->mSiteUrl);
}
// Initialize presentation object
public function init(){}


}
?>