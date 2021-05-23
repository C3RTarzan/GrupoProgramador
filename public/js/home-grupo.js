colornav()
setTimeout( function() {
    const page = document.querySelectorAll(".namedir");
    page[0].click();
}, 1000 );

function colornav(){
    const iconify = document.querySelectorAll(".home-page .pai .iconify");
    console.log("oiiiii");
    iconify[2].style = "color: #f00";
}