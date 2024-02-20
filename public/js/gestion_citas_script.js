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
  
  var aceptButton=document.getElementsByClassName('acept-button')
  const launcAlertita=document.getElementById("alertitas-aceptar");


  for (var y = 0; y < aceptButton.length; y++) {
    aceptButton[y].addEventListener('click', function(e) {
      e.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
      var ides = this.getAttribute('data-id'); // Obtener la ID almacenada en data-id
  
      // Mostrar una alerta con la ID correspondiente
      launcAlertita.classList.add("ver")
      console.log(ides);
      var lil=document.getElementById("recibe");
      lil.value = ides;
    });
  }
  function cerratAceptar() {
    launcAlertita.classList.remove("ver")
  }
function cerrarCito(){
  const reagendarModal=document.getElementById("reagendar-modal")
  reagendarModal.classList.remove("seeDa")
}
  