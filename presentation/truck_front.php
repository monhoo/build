<?php
class TruckFront
{
public $mSiteUrl;
public $mMyWord;
// Class constructor
public function __construct(){
$this->mSiteUrl = Link::Build('');

$this->mMyWord = "this is freaking good";
echo $this->mMyWord;

}
// Initialize presentation object
public function init(){
	
	}


}
?>