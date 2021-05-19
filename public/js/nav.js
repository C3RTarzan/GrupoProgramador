window.onload = () =>{
    holver();
    nav();
    copied();  
    options();
    menu()

    document.querySelector(".namedir").click();
}

function menu(){
    const openedmenu = document.querySelector(".openedmenu");
    const devs = document.querySelector(".devs");
    const articles = document.querySelector(".articles");
    const span = openedmenu.querySelector(".span");
    let cont = true;
    openedmenu.addEventListener("click", () =>{  
        if (cont) {
            devs.style = "display: none";
            articles.style = "width: 100%";
            openedmenu.style = "right: 1px";
            span.style = "transform: rotateZ(180deg);"
            cont = false;
        }else{
            devs.style = "display: inline";
            articles.style = "width: calc(100% - 200px);";
            openedmenu.style = "right: 200px";
            span.style = "transform: rotateZ(0);"
            cont = true;
        }
    })
}

function options(){
    const click = document.querySelector("header .gear");
    const display = document.querySelector(".secoptions");
    const exit = document.querySelector(".ExitOptions");
    click.addEventListener("click", () =>{

        display.style = "display: inline";

    })
    exit.addEventListener("click", () =>{
        display.style = "display: none";

    })  
    document.querySelector('body').addEventListener('keydown', function(event) {
        let tecla = event.keyCode;
       if(tecla == 27){
            if(display.style.display == "none" || display.style.display == ""){
                display.style = "display: inline";
            }else if(display.style.display == "inline"){
                display.style = "display: none";
            }
       }   
    })
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

