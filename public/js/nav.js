window.onload = () =>{
    holver();
    nav();
    copied();  
    document.querySelector(".namedir").click();
}
function copied(){
    const click = document.querySelector(".nick span");
    const copied = document.querySelector(".copied");  
    click.addEventListener("click", () =>{
        navigator.clipboard.writeText(click.textContent);
        setTimeout( function() {
            copied.style = "display: none";
        }, 800 );
        copied.style = "display: inline";
    })
}
function holver(){
    const home = document.querySelectorAll(".namedir");
    for(let i = 0; i < home.length; i++){
        home[0].style = "background-color: #b9bbbe10";
    }
}
function nav(){
    const itens = document.querySelectorAll(".itens");
    const span = document.querySelectorAll(".namedir")
    const icon = document.querySelectorAll(".namedir .click .icons")
    for(let i = 0; i < span.length; i++){
        let value = 1;
        span[i].addEventListener("click", () =>{
            
            if(value == 0){
                itens[i].style = "display: none";
                icon[i].style = "transform: rotate(0deg)"
                span[i].style = "background-color: rgba(0, 0, 0, 0)";
                value = 1;
            }else if(value == 1){
                itens[i].style = "display: inline";
                icon[i].style = "transform: rotate(90deg)"
                span[i].style = "background-color: #b9bbbe10";
                value = 0;
            }
            
        })
    }   
}

