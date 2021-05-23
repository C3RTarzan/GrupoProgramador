clickoptions();
clickAccount()

function clickoptions(){
    const click = document.querySelectorAll(".secoptions .click")
    const sections = document.querySelectorAll(".secoptions .sections .divdisplay")
    console.log(click.length);
    for(let i = 0; i < click.length; i++){
        click[i].addEventListener("click", () =>{
            for(let z = 0; z < click.length; z++){
                if(i == z){
                    sections[z].style.display = "flex"
                }else{
                    sections[z].style.display = "none"
                }
            }
        })
    }
}
function clickAccount(){
    const click = document.querySelectorAll(".secoptions .click");
    setTimeout( function() {
        click[0].click();
    }, 1000 );
}