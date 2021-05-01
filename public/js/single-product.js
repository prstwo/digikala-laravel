function  defaultModalToggle(){
    document.querySelector('.m-overlay').classList.toggle('active');
    document.querySelector('.remodal-gallery').classList.toggle('remodal-is-closed');
    document.querySelector('.remodal-img-container').src ='images/product-main-pic.jpg';
    if(!document.querySelector('.remodal-gallery').classList.contains('remodal-is-closed')){
        document.querySelector('.m-overlay').addEventListener('click',(overlay)=>{
            document.querySelector('.remodal-gallery').classList.add('remodal-is-closed');
            overlay.target.classList.remove('active');
        })
    }
}
function  modalToggle(send){
    document.querySelector('.m-overlay').classList.toggle('active');
    document.querySelector('.remodal-gallery').classList.toggle('remodal-is-closed');
    document.querySelector('.remodal-img-container').src =send.target.getAttribute('data-src');
    if(!document.querySelector('.remodal-gallery').classList.contains('remodal-is-closed')){
        document.querySelector('.m-overlay').addEventListener('click',(overlay)=>{
            document.querySelector('.remodal-gallery').classList.add('remodal-is-closed');
            overlay.target.classList.remove('active');
        })
    }
}
document.querySelectorAll('.product-gallery-pictures img').forEach((mp)=>{
    mp.addEventListener("click", (send)=>{
        modalToggle(send)
    })
})
function toggleCollapse(btnC){
    btnC.parentElement.parentElement.querySelector('.params-collapse-content').classList.toggle('is-open');
    if(btnC.parentElement.parentElement.querySelector('.params-collapse-content').classList.contains('is-open')){
        btnC.innerText='فقط نمایش مشخصات کلی کالا';
    }
    if(!btnC.parentElement.parentElement.querySelector('.params-collapse-content').classList.contains('is-open')){
        btnC.innerText='نمایش همه مشخصات کالا';
    }
}
function displayRemodal(miniImg){
    document.querySelector('.remodal-img-container').src=miniImg.querySelector('img').getAttribute('data-src');
    //console.log(miniImg)
    miniImg.classList.add('remodal-gallery-thumb-selected');
}
