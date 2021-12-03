window.addEventListener("DOMContentLoaded", _ => {
    logo = document.querySelectorAll('.logo a img')[0];
    contentLogo = document.querySelectorAll('.logo')[0];
    document.querySelectorAll('.logo a')[0].style.display = 'none'
    logo.style.height = '30px'
    logo.style.width = 'auto'
    logo.style.position = 'absolute'
    contentLogo.appendChild(logo)

    document.addEventListener("keypress", (event) => {
        var keyName = event.key;
        if (keyName == "s") {
            logo.style.top = (parseInt(logo.style.top || 0) + 100)+'px';
        };
    }, false);
});