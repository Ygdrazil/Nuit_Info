window.addEventListener("DOMContentLoaded", _ => {
    logo = document.querySelectorAll('.logo a img')[0];
    contentLogo = document.querySelectorAll('.logo')[0];
    document.querySelectorAll('.logo a')[0].style.display = 'none'
    logo.style.height = '30px'
    logo.style.width = 'auto'
    logo.style.position = 'fixed'
    contentLogo.appendChild(logo)

    document.addEventListener("keypress", (event) => {
        var keyName = event.key;
        if (keyName == "s") {
            console.log(keyName);
            logo.style.top + 100;
        };
    }, false);
});