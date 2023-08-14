var editButtons = document.querySelectorAll('.btn-edits.update-button');
// Iterar sobre cada botón obtenido
editButtons.forEach(function(button) {
  button.addEventListener('click', function(event) {
      // Prevenir el comportamiento predeterminado del evento (en este caso, la acción de navegación de los enlaces)
    event.preventDefault();
     // Obtener el atributo "data-id" del botón, que contiene el ID del empleado correspondiente
    var empleadoId = this.getAttribute('data-id');
    // Construir el ID del modal único concatenando el ID del empleado con la cadena "modal-editar"
    var modalId = "editar-mascota" + empleadoId;
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
//desplegar alerta eliminar
var deleteButtons = document.getElementsByClassName('delete-button');
const launcAlert=document.getElementById("alertita");
const closeButton=document.getElementById("close");
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