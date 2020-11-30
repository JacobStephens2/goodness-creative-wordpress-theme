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
