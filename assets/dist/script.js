// Navbar Fixed
window.onscroll = function() {
	const header = document.querySelector('header');
	const scroll = document.querySelector('#scrollatas');
	const fixedNav = header.offsetTop;

	if (window.pageYOffset > fixedNav) {
		header.classList.add('navbar-fixed');
		scroll.classList.remove('hidden');
	} else {
		header.classList.remove('navbar-fixed');
		scroll.classList.add('hidden');
	}
};



// Hamburger
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function() {
	hamburger.classList.toggle('hamburger-active');
	navMenu.classList.toggle('hidden');
});