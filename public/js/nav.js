window.onload = () =>{
    nav()
}
function nav(){
    const itens = document.querySelectorAll(".itens");
    const span = document.querySelectorAll(".namedir .click")
    const icon = document.querySelectorAll(".namedir .click .icons")
    for(let i = 0; i < span.length; i++){
        let value = 1;
        span[i].addEventListener("click", () =>{
            
            if(value == 0){
                itens[i].style = "display: none";
                icon[i].style = "transform: rotate(0deg)"
                value = 1;
            }else if(value == 1){
                itens[i].style = "display: inline";
                icon[i].style = "transform: rotate(90deg)"
                value = 0;
            }
            
        })
    }


    
    
    
}