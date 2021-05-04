/*document.querySelectorAll('.submenu').forEach((sm)=>{
    if(sm.classList.contains('show')){
       // document.querySelector('.m-overlay').classList.add('active');
        //console.log(getComputedStyle(sm).display)
        console.log(window.getComputedStyle(sm).getPropertyValue('display'))
    }
})*/
let mobileMenuCon= document.querySelector('.mobile-menu-container');
function toggleSub(link){
    link.querySelector('ul').classList.toggle('hide');
}
function mobileMenu(){
    mobileMenuCon.classList.toggle('hide');
        document.querySelector('.m-overlay').classList.toggle('active');
        if(!mobileMenuCon.classList.contains('hide')){
            document.querySelector('.m-overlay').addEventListener('click',(overlay)=>{
                mobileMenuCon.classList.add('hide');
                overlay.target.classList.remove('active');
            })
        }
}
let submenuItems=document.querySelectorAll('.js-nav-submenu-items');
function kalayeDigital(){
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-kalaye-digital-menu').style.display=''
}
function sanati(){
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-abzar-sanati-menu').style.display=''
}
function mod(){
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-mod-menu').style.display=''
}
function asbabBazi(){
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-asbab-bazi-menu').style.display=''
}
function zibayie(){
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-salamet-menu').style.display=''
}
function khane(){
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-khane-menu').style.display=''
}
function ketab(){
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-ketab-menu').style.display=''
}
function varzesh(){
    submenuItems.forEach((item)=>{
        item.style.display='none'
    })
    document.querySelector('.js-varzesh-menu').style.display=''
}

let due= new Date(2021, 7, 24, 15,30,0);

var second =60;
var minute = 60;
var hour=24;
var day = 60;
let dayDiv= document.querySelector('.counter-day');
let hourDiv= document.querySelector('.counter-hour');
let minuteDiv= document.querySelector('.counter-minute');
let secondDiv= document.querySelector('.counter-second');
setInterval(function(){
    //console.log(`${day}:${hour}:${minute}:${second-=1}-------`);
    secondDiv.innerText=second--;
    hourDiv.innerText=hour;
    dayDiv.innerText=day;
    minuteDiv.innerText=minute;

    if(second<=0){
        second=60;
        minute-=1;
        minuteDiv.innerText=minute;

        if(minute<=0){
            minute=60;
            hour-=1;
            hourDiv.innerText=hour;


            if(hour<=0){
                hour=24;

                day-=1;
                dayDiv.innerText=day;
            }
        }
    }
}, 1000);

/*document.querySelector('.search-input').addEventListener('focus', (search)=>{
    //
    console.log('hello')
});*/
function bgWhite(search){
    search.parentElement.classList.add('is-active')
}
