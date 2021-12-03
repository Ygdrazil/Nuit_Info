window.addEventListener("DOMContentLoaded", _ => {
    logo = document.querySelectorAll('.logo a img')[0];
    contentLogo = document.querySelectorAll('.logo')[0];
    document.querySelectorAll('.logo a')[0].style.display = 'none'
    logo.style.height = '30px'
    logo.style.width = 'auto'
    logo.style.marginTop = '-20px'
    logo.style.position = 'absolute'
    contentLogo.appendChild(logo)

    var img = document.createElement('img');
    img.src = 'pictures/phare.png';
    contentPhare = document.querySelectorAll('.wrapper')[0];
    img.style.height = '30px'
    img.style.width = 'auto'
    img.style.marginTop = '-55px'
    img.style.marginRight = '30px'
    img.style.position = 'absolute'
    contentPhare.appendChild(img)

    var click = 0
    const vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)
    const vh = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0)
    var notStart = true

    logo.addEventListener("click", (event) => {
        click+=1
    });

    document.addEventListener("keypress", (event) => {
        var keyName = event.key;
        if(click >= 3){
            if(notStart){
                logo.style.top = 35 + 'px'
                logo.style.left = 25 + 'px'
                notStart = false
            }
            if(parseInt(logo.style.top) <= vh - 60){
                if (keyName == "s") {
                    logo.style.top = (parseInt(logo.style.top || 40) + 10)+'px';
                };
            }
            if(parseInt(logo.style.left) >= 0 - 30){
                if (keyName == "q") {
                    logo.style.left = (parseInt(logo.style.left || 30) - 10)+'px';
                    console.log(click)
                };
            }
            if(parseInt(logo.style.left) <= vw - 200){
                if (keyName == "d") {
                    logo.style.left = (parseInt(logo.style.left || 30) + 10)+'px';
                };
            }
            if(parseInt(logo.style.top) >= 0 + 30){
                if (keyName == "z") {
                    logo.style.top = (parseInt(logo.style.top || 40) - 10)+'px';
                };
            }
        }
    }, false);
});