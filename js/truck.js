// JavaScript Document
jQuery(document).ready(function(){
   jQuery("#myBtn").click(function(){
        $("#myModal").modal();
    });
	$('[data-toggle="popover"]').popover();
	$('[data-toggle="tooltip"]').tooltip();  
<<<<<<< HEAD

$(window).on("load", function() {
 $(".container").load("front_page.php?" + $.param({
        AjaxRequest: true,
        CartAction: true}))  
     
})

=======
>>>>>>> b5fff0647d25873b998811318293bdd7fb0b85fb
});