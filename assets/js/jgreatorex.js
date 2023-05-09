'use strict';


// Blinker Effect on header title
const blinkerElement = document.getElementById('blinker');

window.setInterval(function(){
    blinkerElement.style.opacity = blinkerElement.style.opacity === "1" ? "0" : "1";
}, 500)

// Header particles animation
particlesJS.load('site-header', 'assets/js/particles.json')