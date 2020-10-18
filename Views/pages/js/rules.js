const rulesMenu = document.getElementById('rules-menu');
rulesMenu.setAttribute('onclick', 'toggleRulesDisplay()');

const rules = document.getElementById('rules');
rules.setAttribute('onclick', 'toggleRulesDisplay()');

function toggleRulesDisplay() {
    document.querySelector('header').classList.toggle('dn');
    document.querySelector('main').classList.toggle('dn');
    document.querySelector('footer').classList.toggle('dn');
    rules.classList.toggle('dn');
}

document.body.onkeyup = function(e) {
    if(e.which == 27 && !rules.classList.contains('dn')) {
       toggleRulesDisplay()
    }
}
