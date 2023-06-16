const botonDerSimple = document.getElementById("simply-right")
const deslizador=document.getElementById("tabla")
const botonIzqSimple = document.getElementById("izquierda")

botonDerSimple.addEventListener('click', () => {
  const porcentajeDesplazamiento = 100;
  const desplazamiento = deslizador.offsetWidth * (porcentajeDesplazamiento / 100);
   deslizador.scrollLeft+=desplazamiento;
})


botonIzqSimple.addEventListener('click', () => {
  const porcentajeDesplazamiento = 100;
  const desplazamiento = deslizador.offsetWidth * (porcentajeDesplazamiento / 100);
    deslizador.scrollLeft-=desplazamiento;
     })
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

//funcion desplegar modal en tiempo real #HaterNo1DeBootstrap!!!!!!////////////////////////
var editButtons = document.querySelectorAll('.edit-button.update-button');
// Iterar sobre cada botón obtenido
editButtons.forEach(function(button) {
  button.addEventListener('click', function(event) {
      // Prevenir el comportamiento predeterminado del evento (en este caso, la acción de navegación de los enlaces)
    event.preventDefault();
     // Obtener el atributo "data-id" del botón, que contiene el ID del empleado correspondiente
    var empleadoId = this.getAttribute('data-id');
    // Construir el ID del modal único concatenando el ID del empleado con la cadena "modal-editar"
    var modalId = "modal-editar" + empleadoId;
    console.log(modalId)
     // Mostrar el modal seleccionándolo por su ID y agregando la clase CSS "aparecer"
    var modalc = document.getElementById(modalId);
    modalc.classList.add("aparecer") 
      // Obtener el botón de cierre dentro del modal
      var closeButton = modalc.querySelector('.put-close');
       // Agregar evento de clic al botón de cierre para llamar a la función cerrarModal
      closeButton.addEventListener('click', function() {
        cerrarModal(modalId, modalc)// Pasar el ID del modal y el elemento modal como parámetros
    });
    });
});
// Función para cerrar el modal
function cerrarModal(modalId, modalc) {
  modalc.classList.remove('aparecer')// Quitar la clase "aparecer" para ocultar el modal
}



//funcion desplegar modal en tiempo real #HaterNo1DeBootstrap!!!!!!////////////////////////
var verButtons = document.querySelectorAll('.edit-button.ver-empleado');
// Iterar sobre cada botón obtenido
verButtons.forEach(function(buttonz) {
  buttonz.addEventListener('click', function(evento) {
      // Prevenir el comportamiento predeterminado del evento (en este caso, la acción de navegación de los enlaces)
    evento.preventDefault();
     // Obtener el atributo "data-id" del botón, que contiene el ID del empleado correspondiente
    var empleadoIdver = this.getAttribute('data-id');
    // Construir el ID del modal único concatenando el ID del empleado con la cadena "modal-editar"
    var modalIdver = "modal-ver" + empleadoIdver;
    console.log(modalIdver)
     // Mostrar el modal seleccionándolo por su ID y agregando la clase CSS "aparecer"
    var modalca = document.getElementById(modalIdver);
    modalca.classList.add("aparecer") 
      // Obtener el botón de cierre dentro del modal
      var closeButton = modalca.querySelector('.put-close');
       // Agregar evento de clic al botón de cierre para llamar a la función cerrarModal
      closeButton.addEventListener('click', function() {
        cerrarModal(modalIdver, modalca)// Pasar el ID del modal y el elemento modal como parámetros
    });
    });
});
// Función para cerrar el modal
function cerrarModal(modalIdver, modalca) {
  modalca.classList.remove('aparecer')// Quitar la clase "aparecer" para ocultar el modal
}
