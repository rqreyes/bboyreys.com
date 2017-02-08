$(document).ready(function() {
	// Animsition
	$('.animsition').animsition();

	// Adding Active Class
	$(function() {
		var navMobile = document.getElementsByTagName('nav')[1],
				anchorMobile = navMobile.getElementsByTagName('a'),
				navDesktop = document.getElementsByTagName('nav')[0],
				anchorDesktop = navDesktop.getElementsByTagName('a'),
				current = window.location;

		for(var i = 0; i < anchorMobile.length; i++) {
			if(anchorMobile[i].href == current) {
				anchorMobile[i].className = 'active';
			}
		}

		for(var i = 0; i < anchorDesktop.length; i++) {
			if(anchorDesktop[i].href == current) {
				anchorDesktop[i].className = 'active';
			}
		}
	});
});