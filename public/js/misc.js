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
        document.querySelector('.visible').style.transition = '3s';
        document.querySelector('.visible').style.bottom = '60rem';
        window.scrollTo(0, 0);
    });

    var transition = document.querySelector('.visible');
    if(transition != null){
        transition.addEventListener('transitionend', () => {
            console.log('Transition ended');
        });
    }
    


});

// Functions