let menu = document.querySelector('div.box-opacity');
let menuBox = document.querySelector('.menu-container');

function openMenu () {
    menu.style.display = 'block';
    menuBox.style.marginLeft = '0px'
}
function closeMenu () {
    menuBox.style.marginLeft = '-100%';
    menu.style.display = 'none';
}

let cascadingOpt = document.querySelectorAll('.cascading-opt');
let chevron = document.querySelectorAll('i.fa-chevron-down');
let cascadingOptVisibility = false;

function toggleCascading (id) {
    if (cascadingOptVisibility == false) {
        cascadingOpt[id].style.height = 'auto';
        chevron[id].style.transform = 'rotate(180deg)'
        cascadingOptVisibility = true;
    } else {
        cascadingOpt[id].style.height = '0px';
        chevron[id].style.transform = 'rotate(0deg)';
        cascadingOptVisibility = false;
    }

    
}