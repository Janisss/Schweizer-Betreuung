// JavaScript Document
$(document).ready(function() {
	$(".uber").hide();
	$(".wiss").hide();
	$(".bottom").hide();
	$(".bottom2").hide();
	$("h1").addClass("animated");
	$("h1").addClass("bounceIn");
	
	$(".sub1").click(function(){
		$(".uber").slideToggle(200,"linear");
		$(".bottom").toggle();
		$(".wiss").hide();
		$(".bottom2").hide();
	});
	$(".sub2").click(function(){
		$(".wiss").slideToggle(200,"linear");
		$(".bottom2").toggle();
		$(".uber").hide();
		$(".bottom").hide();
	});
	$(".show-menu").click(function(){
		$(".tog-class").toggleClass("big animated pulse");
		$(".uber").hide();
		$(".wiss").hide();
		$(".bottom").hide();
		$(".bottom2").hide();
	});	
});