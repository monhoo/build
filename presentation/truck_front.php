<?php
class TruckFront
{
public $mSiteUrl;
public $mMyWord;
// Class constructor
public function __construct(){
$this->mSiteUrl = Link::Build('');

$this->mMyWord = "this is freaking good";
echo '<div class="bg-success">'.$this->mMyWord.'</div>';
echo '<div class="bg-warning">'.$this->mSiteUrl.'</div>';

}
// Initialize presentation object
public function init(){
	
	}


}
$hey = new TruckFront();
echo '<div class="bg-success">'.$hey->mMyWord.'</div>';
echo '<div class="bg-warning">'.$hey->mSiteUrl.'</div>';
?>