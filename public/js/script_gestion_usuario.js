const botonAbrir = document.getElementById("create");
const modal = document.getElementById("modal");
const botonCerrar = document.querySelector(".put-close");

botonAbrir.addEventListener('click', () => {

    modal.classList.add("aparecer")
    botonAbrir.classList.add("boton-desaparecer")

})
botonCerrar.addEventListener('click', () => {

    modal.classList.remove("aparecer")
    botonAbrir.classList.remove("boton-desaparecer")

})
// Obtener todos los elementos con la clase delete-button
var deleteButtons = document.getElementsByClassName('delete-button');
const launcAlert=document.getElementById("alertita");
const closeButton=document.getElementById("close");


// Recorrer los elementos y agregar el evento de clic a cada uno
for (var i = 0; i < deleteButtons.length; i++) {
  deleteButtons[i].addEventListener('click', function(e) {
    e.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
    var id = this.getAttribute('data-id'); // Obtener la ID almacenada en data-id

    // Mostrar una alerta con la ID correspondiente
    launcAlert.classList.add("ver")
    console.log(id);
    var lil=document.getElementById("recepcion");
    lil.value = id;
  });
}
closeButton.addEventListener('click', function(){
    launcAlert.classList.remove("ver");

    
})