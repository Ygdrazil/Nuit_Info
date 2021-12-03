window.addEventListener("DOMContentLoaded", _ => {
    const vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)
    const vh = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0)

    //Création de la div du bateau pour l'easter egg
    logo = document.querySelectorAll('.logo a img')[0];
    contentLogo = document.querySelectorAll('.logo')[0];
    document.querySelectorAll('.logo a')[0].style.display = 'none'
    logo.style.height = '30px'
    logo.style.width = 'auto'
    logo.style.marginTop = '-20px'
    logo.style.position = 'absolute'
    contentLogo.appendChild(logo)

    //Création de la div du phare
    var img = document.createElement('img');
    img.src = 'pictures/phare.png';
    contentPhare = document.querySelectorAll('.nav-content')[0];
    img.style.height = '30px'
    img.style.width = 'auto'
    img.style.top = '15px'
    img.style.right = '85px'
    img.style.position = 'absolute'
    contentPhare.appendChild(img)

    var click = 0
    var notStart = true

    logo.addEventListener("click", (event) => {
        click+=1
    });

    //Event de déplacement, il faut toucher le bateau au moins 3 fois pour le lancer
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
            if(parseInt(logo.style.left) <= vw - 165){
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

    let x1 = logo.offset().left;
    let y1 = logo.offset().top;
    let h1 = logo.outerHeight(true);
    let w1 = logo.outerWidth(true);
    let b1 = y1 + h1;
    let r1 = x1 + w1;
    let x2 = phare.offset().left;
    let y2 = phare.offset().top;
    let h2 = phare.outerHeight(true);
    let w2 = phare.outerWidth(true);
    let b2 = y2 + h2;
    let r2 = x2 + w2;

    if (b1 < y2 || y1 > b2 || r1 < x2 || x1 > r2)
        document.location.href="."
});