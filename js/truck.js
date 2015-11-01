// JavaScript Document
jQuery(document).ready(function(){
   jQuery("#myBtn").click(function(){
        $("#myModal").modal();
    });
	$('[data-toggle="popover"]').popover();
	$('[data-toggle="tooltip"]').tooltip();  
});