window.onload = () =>{
    holver();
    nav();
    copied();  
    options();
    menu()
    clicknav()
    optionsexit()
}
function clicknav(){
    const home = document.querySelectorAll(".home-page .pai");
    const iconify = document.querySelectorAll(".home-page .pai .iconify")
    for(let i = 0; i < home.length; i++){
        home[i].addEventListener("click", () => {
            if(home[i] == home[0]) window.location.href = "/Home";
            if(home[i] == home[1]) window.location.href = "/Sobre";
        })
    }
}

function menu(){
    const openedmenu = document.querySelector(".openedmenu");
    const devs = document.querySelector(".devs");
    const articles = document.querySelector(".articles");
    const span = openedmenu.querySelector(".span");
    let cont = true;
    if(sessionStorage.getItem("menu")){
        cont = sessionStorage.getItem("menu");
        if(cont === "true"){
            devs.style = "display: none";
            articles.style = "width: 100%";
            openedmenu.style = "right: 1px";
            span.style = "transform: rotateZ(0);"
            cont = false;
        }else{
            devs.style = "display: inline";
            articles.style = "width: calc(100% - 200px);";
            openedmenu.style = "right: 200px";
            span.style = "transform: rotateZ(180deg);"
            cont = true;    
        }
    }
    openedmenu.addEventListener("click", () =>{  
        if (cont) {
            devs.style = "display: none";
            articles.style = "width: 100%";
            openedmenu.style = "right: 1px";
            span.style = "transform: rotateZ(0);"
            sessionStorage.setItem("menu", true);
            cont = false;
            
        }else{
            devs.style = "display: inline";
            articles.style = "width: calc(100% - 200px);";
            openedmenu.style = "right: 200px";
            span.style = "transform: rotateZ(180deg);"
            sessionStorage.setItem("menu", false);
            cont = true;     
        }
    })
}

function options(){
    const click = document.querySelector("header .gear .iconify");
    if(click != null){
        const display = document.querySelector(".secoptions");
        const exit = document.querySelector(".ExitOptions");
        const section = document.querySelector("section");
        let cont = sessionStorage.getItem("options");
        if(cont == "true"){
            display.style = "display: inline";
            section.style = "overflow-y: none;"
        }else{
            display.style = "display: none";
            section.style = "overflow-y: auto;"
        }  
        click.addEventListener("click", () =>{
            display.style = "display: inline";
            sessionStorage.setItem("options", "true");
        })
        exit.addEventListener("click", () =>{
            display.style = "display: none";
            sessionStorage.setItem("options", "false");
    
        })  
        document.querySelector('body').addEventListener('keydown', function(event) {
        let tecla = event.keyCode;
        if(tecla == 27){
            if(display.style.display == "none" || display.style.display == ""){
                display.style = "display: inline";
                sessionStorage.setItem("options", true);
            }else if(display.style.display == "inline"){
                display.style = "display: none";
                sessionStorage.setItem("options", false);
            }
        }   
        })
    }
}
function optionsexit(){
    const exit = document.querySelector(".secoptions .exitAccount");
    if(exit != null ){
        exit.addEventListener("click", () =>{
            sessionStorage.setItem("options", "false")
            window.location.href = "/class/exit.php"
        })
    }
}

function copied(){
    const click = document.querySelector(".nick span");
    const copied = document.querySelector(".copied");  
    if(click != null){
        click.addEventListener("click", () =>{
            navigator.clipboard.writeText(click.textContent);
            setTimeout( function() {
                copied.style = "display: none";
            }, 800 );
            copied.style = "display: inline";
        })
    }
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

