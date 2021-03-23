function handleClickh() {
    var audioPlayer = document.getElementById("ee");
    audioPlayer.play();
}

function init() {
    console.log("Initializing...");
    var h = document.getElementById("h");
    h.addEventListener("click", handleClickh);
}

document.addEventListener('DOMContentLoaded', init);

const txtAnim = document.querySelector('h5');

new Typewriter(txtAnim, {
    deleteSpeed: 40
})
.changeDelay(40)
.typeString("Hello !")
.pauseFor(300)
.typeString(" Voici mon code <span style='color: #9400D3;'>Github</span> ;)")
.pauseFor(1000)
.deleteChars(24)
.pauseFor(500)
.typeString("Cliquez sur l'<span style='color: #66CDAA;'>image</span> !")
.pauseFor(1000)
.start()

const txtAnim2 = document.querySelector('h6');

new Typewriter(txtAnim2, {
    loop: true,
    deleteSpeed: 40
})
.changeDelay(40)
.typeString(" <span style='color: #9F8EF6'>Logos</span>")
.pauseFor(1000)
.deleteChars(5)
.pauseFor(500)
.typeString(" <span style='color: #66B1EB'>Boutons</span>")
.pauseFor(1000)
.deleteChars(7)
.pauseFor(500)
.typeString(" <span style='color: #DDA0DD'>Emotes</span>")
.pauseFor(1000)
.start()

jQuery(function(){
    $(function () {
        $(window).scroll(function () { //Fonction appelée quand on descend la page
            if ($(this).scrollTop() > 200 ) {  // Quand on est à 200pixels du haut de page,
                $('#scrollUp').css('right','30px'); // Replace à 10pixels de la droite l'image
            } else { 
                $('#scrollUp').removeAttr( 'style' ); // Enlève les attributs CSS affectés par javascript
            }
        });
    });
});
