var yukari = document.getElementsByClassName("yukari-cik")[0];

window.addEventListener("scroll", function() {

    const mesafe = window.scrollY;
    if (mesafe > 500) {
        yukari.classList.add("goster")

    } else {
        yukari.classList.remove("goster")
    }

});
yukari.addEventListener("click", function() {
    window.scrollTo(0, 0)
})

//İLETİİŞİM
// function temizle (){
//     var name = document.getElementById("isim").innerHTML;
//     if(name != ""){

//     }
// }



//Slider
