window.addEventListener("DOMContentLoaded", _ => {
    logo = document.querySelectorAll('.logo a img')[0];
    contentLogo = document.querySelectorAll('.logo')[0];
    document.querySelectorAll('.logo a')[0].style.display = 'none'
    logo.style.height = '30px'
    logo.style.width = 'auto'
    logo.style.marginTop = '-30px'
    logo.style.position = 'absolute'
    contentLogo.appendChild(logo)

    document.addEventListener("keypress", (event) => {
        var keyName = event.key;
        if (keyName == "z") {
            if(logo.style.top > 0)
                logo.style.top = (parseInt(logo.style.top) - 10)+'px';
        };
        if (keyName == "s") {
            logo.style.top = (parseInt(logo.style.top) + 10)+'px';
        };
        if (keyName == "q") {
            if(logo.style.left > 0)
                logo.style.left = (parseInt(logo.style.left) - 10)+'px';
        };
        if (keyName == "d") {
            logo.style.left = (parseInt(logo.style.left) + 10)+'px';
        };
    }, false);
});