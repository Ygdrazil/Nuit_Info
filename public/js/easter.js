window.addEventListener("DOMContentLoaded", _ => {
    logo = document.querySelectorAll('.logo a img')[0];
    contentLogo = document.querySelectorAll('.logo')[0];
    document.querySelectorAll('.logo a')[0].style.display = 'none'
    logo.style.height = '30px'
    logo.style.width = 'auto'
    contentLogo.appendChild(logo)

    logo.addEventListener('keydown', logKey);

    var count = 0
    function logKey(e) {
        logo.style.top + 100;
    }
});