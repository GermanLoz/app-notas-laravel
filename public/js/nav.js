const button = document.getElementById('button-menu')
const nav = document.getElementById('nav')
const ocultar = document.getElementById('ocultar')
let test = false

button.addEventListener('click', ()=>{
    if(test == false){
        nav.classList.add('nav')
        nav.style.display="block";
       if(ocultar){
            ocultar.style.display="none";
            }
        return test = true
    }
    if(test == true){
       nav.classList.remove('nav')
       nav.style.display="none";
       if(ocultar){
            ocultar.style.display="block";
       }
       return test = false
    }
})