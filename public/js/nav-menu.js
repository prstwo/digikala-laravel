/* document.querySelectorAll('.nav-link-title').forEach((navlink)=>{
         navlink.addEventListener('mouseover',function(e){
            e.target.nextElementSibling.classList.add('show');
            document.querySelector('.overlay').classList.add('active')

        })
         navlink.addEventListener('mouseup',function(el){
             if(el.target!= document.querySelector('.submenu')&& el.target!= document.querySelectorAll('.nav-link-title')){
                el.target.nextElementSibling.classList.remove('show');

             }

        });  */

document.querySelector('.nav-container').addEventListener('click',function(e){
    if(e.target.classList.contains('toggle')){
        let linkTitle=e.target;
        document.querySelector('.overlay').classList.toggle('active');
        let elem=linkTitle.nextElementSibling;

        elem.classList.toggle('show');
        if(linkTitle.nextElementSibling.classList.contains('show')){
            document.querySelector('.overlay').addEventListener('click', function(e){
                if(!elem.contains(e.target)){
                    elem.classList.remove('show');
                    document.querySelector('.overlay').classList.remove('active');

                }
            })
        }
    }
});

/*
let submenus = document.querySelectorAll('.submenu');
for(var i=0;i<submenus.length;i++){
    submenus[i].addEventListener('mouseleave',(e2)=>{
        e2.target.classList.remove('show');
        document.querySelector('.overlay').classList.remove('active');
                })
        submenus[i].addEventListener('mouseover',(e4)=>{
        e4.target.classList.add('show');
        document.querySelector('.overlay').classList.add('active');
                })
}
let toggles = document.querySelectorAll('.toggle');
for(var j=0;j<toggles.length;j++){
    var current = toggles[j];
    toggles[j].addEventListener('mouseleave',(e)=>{
    console.log(current.nextElementSibling);


    })
} */



/*  e.target.nextElementSibling.classList.add('show');
 document.querySelector('.overlay').classList.add('active')
)
.forEach((navlink)=>{
 navlink.addEventListener('mouseover',function(e){
    e.target.nextElementSibling.classList.add('show');
    document.querySelector('.overlay').classList.add('active')

})
 navlink.addEventListener('mouseup',function(el){
     if(el.target!= document.querySelector('.submenu')&& el.target!= document.querySelectorAll('.nav-link-title')){
        el.target.nextElementSibling.classList.remove('show');

     }

});
*/



//in script temporary hast
/*  navlinks.addEventListener('click',function(e){
     let link=e.target;
     if(link.classList.contains('toggle')){
         link.nextElementSibling.classList.toggle('show');
      }
 })
})*/

let due= new Date(2021, 7, 24, 15,30,0);

/*
    setInterval(()=>{
        let now= new Date();
        let ellipse=Math.abs(due-now);
        let difference = (ellipse - due.toMillieSeconds) ;
        console.log(ellipse)
    }, 1000); */
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



