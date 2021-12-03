window.addEventListener("DOMContentLoaded", _ => {
    logo = document.querySelectorAll('logo a img')[0];
    contentLogo = document.querySelectorAll('logo')[0];
    document.querySelectorAll('logo a')[0].style.display = 'none'
    contentLogo.appendChild(logo)
});