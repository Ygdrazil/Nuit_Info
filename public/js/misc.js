window.addEventListener("DOMContentLoaded", _ => {
    
    // Attributes




    // Functions Calls




    // Events

    window.addEventListener('scroll', _ =>{
        if(window.scrollY > 150){
            document.querySelector('#up').classList.add('visible');
        } else{
            document.querySelector('#up').classList.remove('visible');
        }
    });

    document.querySelector('.img_rocket').addEventListener('click', _ =>{
        window.scrollTo(0, 0);
    });


});

// Functions