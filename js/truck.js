// JavaScript Document
jQuery(document).ready(function(){
   jQuery("#myBtn").click(function(){
        $("#myModal").modal();
    });
	$('[data-toggle="popover"]').popover();
	$('[data-toggle="tooltip"]').tooltip();  

$(window).on("load", function() {
 $(".container").load("front_page.php?" + $.param({
        AjaxRequest: true,
        CartAction: true}))  
     
})
});