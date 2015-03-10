/**
 * @author Christian ZIRBES
 */
window.onload = animeDamier;
function animeDamier() {
	for (var i=0;i<=2399;i++) {
	var bgDamier = document.getElementById(i);
	var r = Math.floor((Math.random()*255)+1);
	var g = Math.floor((Math.random()*255)+1);
	var b = Math.floor((Math.random()*255)+1);
	//bgDamier.style.backgroundColor =  "rgb( "+r+" , "+g+" , "+b+")" ;
	bgDamier.style.backgroundColor =  "green" ;
	}
}

function myFunction(myId) {
    //alert(myId);
    document.getElementById(myId).style.backgroundColor = "red";
}
//var timer=setInterval( "animeDamier()" , 100);