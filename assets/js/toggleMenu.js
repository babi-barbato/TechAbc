let menuBtn = document.querySelector('#menu-button');
let menuOptions = document.querySelector('#menu-opt');
let menuBox = document.querySelector('#mobile-menu')
let menuStatus = false;

function toggleMenu () {
    if (menuStatus == true) {
        menuStatus = false;
        menuOptions.style.height = '0px';
        menuBox.style.paddingBottom = '0px';
    } else {
        menuStatus = true;
        menuOptions.style.height = '188px';
        menuBox.style.paddingBottom = '10px';
    }
}