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
echo '<div class="bg-danger col-sm-3">fghghfghf</div>

<div class="container">
<h3>Tooltip Example</h3>
  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Hooray!">Hover over me</a>
  <h3>Popover Example</h3>
  <a href="#" title="Header" data-toggle="popover" data-content="Some content">Click Me</a><br>
  <a href="#" title="Header" data-toggle="popover" data-trigger="hover" data-content="Some content">Hover over me</a>
</div>';
}
// Initialize presentation object
public function init(){
	
	}


}
?>