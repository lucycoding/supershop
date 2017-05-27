$(document).ready(function() {
		$("select").selectBox();
	});

$(function() {
    $(".page_tabs:first").css("backgroundColor","#59B7C2");
    $(".page_tabs").click(function(){
        $(".page_tabs").css("backgroundColor","#F5F7F9");
        $(this).css("backgroundColor","#59B7C2");
    });
    $(window).resize();
});

$(document).ready(function(){
	      $("button").click(function(){
		     $(this).addClass('click')
	      });             
})