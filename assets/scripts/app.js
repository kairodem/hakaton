window.onload = function() {
	//background init 
	var backs = ["w.jpg","w1.jpg","w2.jpg"]
	var r = Math.floor(Math.random()*3) // generates a number between 0 and 2 inclusive
	document.body.style.backgroundImage = "url('" + "assets/img/" + backs[r] + "')";
}