function toggleNav() {
    document.body.classList.toggle('open');
    window.scrollTo(0, 0);
}

function closeNav() {
    document.body.classList.remove('open');
}

function load() {
    var cur = location.hash.substring(1);
    if (!cur) cur = 'start';

    // Stamp content.
    let template = document.querySelector('#' + cur);
    let clone = document.importNode(template.content, true);
    let content = document.querySelector('#content');
    content.innerHTML = '';
    content.appendChild(clone);
    if (cur == 'contact') {
        grecaptcha.render("g-recaptcha")
    }

    // Update links.
    for (let e of document.querySelectorAll('a')) {
        if (e.getAttribute('href') == '#' + cur) {
            e.classList.add('active');
        } else {
            e.classList.remove('active');
        }
        e.addEventListener('click', closeNav);
    }

    // Navigation toggle.
    let navtoggle = document.querySelector('#navtoggle');
    navtoggle.addEventListener('click', toggleNav);
}

window.onhashchange = () => {
    window.scrollTo(0, 0);
    load();
};
window.onload = load;

// Scroll overlay.
const storeScroll = () => {
    document.documentElement.dataset.scroll = window.scrollY;
};
document.addEventListener('scroll', storeScroll);
storeScroll();