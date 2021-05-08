function toggleNav(){
    /*if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.querySelector(".desktop-nav").classList.add('hide')
    } else {
        document.querySelector(".desktop-nav").classList.remove('hide')
    }*/
    if (window.scrollY < 300 || window.scrollY < 300) {
        document.querySelector(".desktop-nav").classList.remove('hide')

    }
    else {
        document.querySelector(".desktop-nav").classList.add('hide')
    }
}
document.addEventListener('scroll',()=>{
    toggleNav()
});
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});





