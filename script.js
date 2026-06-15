let flag = document.getElementById('flag');
let body = document.querySelector('body');
let icone = document.getElementById('icone');

if(localStorage.getItem('tema') === 'dark'){
    body.classList.add('dark');
    flag.classList.add('dark');

    icone.classList.remove('bi-brightness-high-fill');
    icone.classList.add('bi-moon-fill');
}

flag.addEventListener('click', () => {

    flag.classList.toggle('dark');
    body.classList.toggle('dark');

    if(body.classList.contains('dark')){

        icone.classList.remove('bi-brightness-high-fill');
        icone.classList.add('bi-moon-fill');

        localStorage.setItem('tema', 'dark');

    }else{

        icone.classList.remove('bi-moon-fill');
        icone.classList.add('bi-brightness-high-fill');

        localStorage.setItem('tema', 'light');
    }

});