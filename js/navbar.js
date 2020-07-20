const toggleButton = document.getElementsByClassName('toggle-button')[0];
const navbarLinks = document.getElementsByClassName('navbar-links')[0];

toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
});

let menuOpen = false;

toggleButton.addEventListener('click', () => {
    if(!menuOpen) {
        toggleButton.classList.add('open');
        menuOpen = true;
    } else {
        toggleButton.classList.remove('open');
        menuOpen = false;
    }

});