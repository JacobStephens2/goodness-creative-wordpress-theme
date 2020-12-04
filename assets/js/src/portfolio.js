/**
 * File portfolio.js.
 *
 * Provides extra functionality
 */

function showWACover() {
	document.getElementById("wa-cover").style.display = "inline";
	document.getElementById("wa-spread1").style.display = "none";
	document.getElementById("wa-spread2").style.display = "none";
}
function showWASpread1() {
	document.getElementById("wa-cover").style.display = "none";
	document.getElementById("wa-spread1").style.display = "inline";
	document.getElementById("wa-spread2").style.display = "none";
}
function showWASpread2() {
	document.getElementById("wa-cover").style.display = "none";
	document.getElementById("wa-spread1").style.display = "none";
	document.getElementById("wa-spread2").style.display = "inline";
}

var agnes = document.getElementById('agnes');
var agnesImage = document.getElementById('agnes-image');
var logos = document.getElementById('logos');

agnes.addEventListener('mouseenter', agnesDarkenOver);
agnes.addEventListener('mouseleave', agnesDarkenOut);

function agnesDarkenOver() {
	agnesImage.classList.toggle('darken');
	agnesImage.classList.toggle('lighten');
	logos.classList.toggle('no-text');
}

function agnesDarkenOut() {
	agnesImage.classList.toggle('darken');
	agnesImage.classList.toggle('lighten');
	logos.classList.toggle('no-text');
}

var biomass = document.getElementById('biomass');
var biomassImage = document.getElementById('biomass-image');
var presentations = document.getElementById('presentations');

biomass.addEventListener('mouseenter', biomassDarkenOver);
biomass.addEventListener('mouseleave', biomassDarkenOut);

function biomassDarkenOver() {
	biomassImage.classList.toggle('darken');
	biomassImage.classList.toggle('lighten');
	presentations.classList.toggle('no-text');
}

function biomassDarkenOut() {
	biomassImage.classList.toggle('darken');
	biomassImage.classList.toggle('lighten');
	presentations.classList.toggle('no-text');
}
