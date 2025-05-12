document.addEventListener('DOMContentLoaded',()=>{

    console.log("hello");
    let hamburger = document.querySelector('.icon-wrapper');
    if(hamburger){
        hamburger.addEventListener('click',()=>{
            
            let open = document.querySelector('.four-text');
            if(open){
                open.classList.toggle("open");
            }
        })
    }
})
