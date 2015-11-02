{* smarty *}
{config_load file="site.conf"}
{load_presentation_object filename="truck_front" assign="obj"}
<<<<<<< HEAD

<div>{$obj->mSiteUrl}</div>
<div class="bg-danger col-sm-3">{$obj->mMyWord}</div>
=======
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>{$obj->mPageTitle}</title>
 <!-- Bootstrap -->
    <link href="{$obj->mSiteUrl}css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!--<link type="text/css" rel="stylesheet" href="styles/tshirtshop.css" />-->
<link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}css/truck.css" />
<script type="text/javascript" src="{$obj->mSiteUrl}js/ajax.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
  <script src="{$obj->mSiteUrl}js/jquery-2.1.4.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{$obj->mSiteUrl}js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{$obj->mSiteUrl}js/truck.js"></script>
</head>

<body>
<div>{$obj->mSiteUrl}</div>
>>>>>>> b5fff0647d25873b998811318293bdd7fb0b85fb
<div class="container">
<h3>Tooltip Example</h3>
  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Hooray!">Hover over me</a>
  <h3>Popover Example</h3>
  <a href="#" title="Header" data-toggle="popover" data-content="Some content">Click Me</a><br>
  <a href="#" title="Header" data-toggle="popover" data-trigger="hover" data-content="Some content">Hover over me</a>
</div>
<div class="container">
  <h2>Modal Login Example</h2>
  <!-- Trigger the modal with a button -->
  <!--<button type="button" class="btn btn-default btn-lg" id="myBtn">Login</button>-->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="{$obj->mSiteUrl}images/image3.jpg" alt="Chania">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>

      <div class="item">
        <img src="{$obj->mSiteUrl}images/image2.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="{$obj->mSiteUrl}images/image3.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beatiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>

     
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<div class="container-fluid">
<div class="row bg-success">
<a href="{$obj->mSiteUrl}"><img src="{$obj->mSiteUrl}images/image2.jpg"
class="img-circle img-responsive" alt="tshirtshop logo" />
</a>
</div><!--end of row-->
<nav class="navbar bg-1 navbar-info">
  <div class="container-fluid">
    <div class="navbar-header" style="color:#fff;">
      <a class="navbar-brand" href="#" >WebSiteName</a>
    </div>
    <div >
      <ul class="nav navbar-nav" >
        <li ><a class="active" href="#">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" >
        <li ><a href="#"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="row">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li> 
        <li><a href="#">Page 3</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>      
    </div>
  </div>
</nav>

</div><!--end of row-->
</div><!--end of container-->

<div>
<!--{include file=$obj->mContentsCell}-->
</div>

<div>
<!--{include file=$obj->mLoginOrLoggedCell}-->
<!--{if !$obj->mHideBoxes}
{include file="search_box.tpl"}
{include file="departments_list.tpl"}
{include file=$obj->mCategoriesCell}
{include file=$obj->mCartSummaryCell}
{/if}-->
</div>
 
<<<<<<< HEAD

=======
</body>
</html>
>>>>>>> b5fff0647d25873b998811318293bdd7fb0b85fb
