document.addEventListener("DOMContentLoaded", function(){

    const toggleMenuDiv = document.getElementById('toggle-menu');
    const header = document.querySelector('header');

    toggleMenuDiv.addEventListener('click', toggleMenu);

    function toggleMenu() {
        header.classList.toggle('inative');
    }
});
