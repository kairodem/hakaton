function wall() {
	var backs = ["w.jpg","w1.jpg","w2.jpg"]
	var r = Math.floor(Math.random()*3) // generates a number between 0 and 2 inclusive
	$('body').css("background-image", "url(assets/img/"+ backs[r] + ")")
}
$(document).ready(function(){
	//background init 
	wall();
	document.body.style.animation = "fade 0.5s ease-out";
 	
});
function showSU() {
 	document.getElementById("l").classList.add('unfocus');
 	document.getElementById("r").classList.remove('unfocus');
 	document.getElementById("signin").classList.add('hidden');
 	document.getElementById("signup").classList.remove('hidden');
 	document.getElementById("signup").classList.add('anim');
}
function showSI() {
	document.getElementById("l").classList.remove('unfocus');
 	document.getElementById("r").classList.add('unfocus');
 	document.getElementById("signup").classList.add('hidden');
 	document.getElementById("signin").classList.remove('hidden');
 	document.getElementById("signin").classList.add('anim');
}
function slide() {
	$("#ct").fadeOut();
	setTimeout(function () {
		$("#cd").fadeIn();
		$('body').css("background-image", "none");
	}, 200);
	setTimeout(function () {
		wall();
	}, 1000);
}
function features() {
	$("#cd").fadeOut();
	setTimeout(function () {
		$("#cx").fadeIn();
		$('body').css("background-image", "none");
	}, 200);
	setTimeout(function () {
		wall();
	}, 1000);
}
function abt() {
	$("#cx").fadeOut();
	setTimeout(function () {
		$("#cd").fadeIn();
		$('body').css("background-image", "none");
	}, 200);
	setTimeout(function () {
		wall();
	}, 1000);
}
function unslide() {
	$("#cd").fadeOut();
	setTimeout(function () {
		$("#ct").fadeIn();
		$('body').css("background-image", "none");
	}, 200);
	setTimeout(function () {
		wall();
	}, 500);
}