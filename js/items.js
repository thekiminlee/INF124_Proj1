function switchImage(id){
	var newSrc = document.getElementById(id).src;
	var newAlt = document.getElementById(id).alt;
	document.getElementById("mainImage").src = newSrc;
	document.getElementById("mainImage").alt = newAlt;
}