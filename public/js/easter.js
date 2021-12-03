window.addEventListener("DOMContentLoaded", _ => {
    const vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)
    const vh = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0)
        if(1250 + "px" < vw + "px"){

        //Création de la div du bateau pour l'easter egg
        logo = document.querySelectorAll('.logo a img')[0];
        content = document.querySelectorAll('.nav-content')[0];
        document.querySelectorAll('.logo a')[0].style.display = 'none'
        logo.style.height = '30px'
        logo.style.width = 'auto'
        logo.style.top = '15px'
        logo.style.position = 'absolute'
        content.appendChild(logo)

        //Création de la div du phare
        var img = document.createElement('img');
        img.src = 'pictures/phare.png';
        img.style.height = '30px'
        img.style.width = 'auto'
        img.style.top = '15px'
        img.style.right = '85px'
        img.style.position = 'absolute'
        content.appendChild(img)

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
                    logo.style.top = 15 + 'px'
                    logo.style.left = 25 + 'px'
                    notStart = false
                }
                if(parseInt(logo.style.top) <= vh - 60){
                    if (keyName == "s") {
                        logo.style.top = (parseInt(logo.style.top || 15) + 10)+'px';
                    };
                }
                if(parseInt(logo.style.left) >= 0 - 30){
                    if (keyName == "q") {
                        logo.style.left = (parseInt(logo.style.left || 30) - 10)+'px';
                    };
                }
                if(parseInt(logo.style.left) <= vw - 130){
                    if (keyName == "d") {
                        logo.style.left = (parseInt(logo.style.left || 30) + 10)+'px';
                    };
                }
                if(parseInt(logo.style.top) >= 0 + 30){
                    if (keyName == "z") {
                        logo.style.top = (parseInt(logo.style.top || 15) - 10)+'px';
                    };
                }
                let x1 = logo.offsetLeft
                let y1 = logo.offsetTop
                let h1 = logo.offsetHeight
                let w1 = logo.offsetWidth
                let x2 = img.offsetLeft
                let y2 = img.offsetTop
                let h2 = img.offsetHeight
                let w2 = img.offsetWidth
                console.log("x1" + x1)
                console.log("x2" + x2)
                console.log("y1" + y1)
                console.log("y2" + y2)

                if (x1 < x2 + w2 && x1 + w1 > x2 && y1 < y2 + h2 && h1 + y1 > y2)
                    window.location.replace("http://stackoverflow.com");
            }
        }, false);
    }
});