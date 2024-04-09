
//funcion slider cards/

const izq = document.querySelector(".botoncito-izq")
const der = document.querySelector(".botoncito-derecho")
const slider = document.querySelector(".slider")
function guardarPosicionSlider() {
    const posicionActual = slider.scrollLeft;
    localStorage.setItem('posicionSlider', posicionActual);
}

// Función para restaurar la posición del slider desde el almacenamiento local
function restaurarPosicionSlider() {
    const posicionGuardada = localStorage.getItem('posicionSlider');
    if (posicionGuardada !== null) {
        slider.scrollLeft = parseInt(posicionGuardada);
    }
}

// Evento que se dispara cuando se hace clic en los botones de desplazamiento
izq.addEventListener('click', () => {
    const porcentajeDesplazamiento = 100; // Porcentaje de desplazamiento deseado
    const desplazamiento = slider.offsetWidth * (porcentajeDesplazamiento / 100);
    slider.scrollLeft -= desplazamiento;
});

der.addEventListener('click', () => {
    const porcentajeDesplazamiento = 100; // Porcentaje de desplazamiento deseado
    const desplazamiento = slider.offsetWidth * (porcentajeDesplazamiento / 100);
    slider.scrollLeft += desplazamiento;
});

// Evento que se dispara cuando se ha completado el desplazamiento del slider
slider.addEventListener('scroll', () => {
    // Espera un breve momento para asegurarse de que el desplazamiento se ha completado completamente
    setTimeout(() => {
        guardarPosicionSlider(); // Guarda la nueva posición del slider
    }, 100); // Ajusta el tiempo según sea necesario
});

// Llama a la función para restaurar la posición del slider cuando la página se carga
window.addEventListener('load', () => {
    restaurarPosicionSlider();
});
//funcion desplegar carrito de compras/
const tienda_submenu = document.getElementById("tienda-submenu")
const abrir = document.getElementById("carrito-boton")
const cerrar = document.getElementById("cerrar")
const cerrar2 = document.getElementById("pantalla-cerrar")

abrir.addEventListener('click', () => {
    // Establecer un indicador en el almacenamiento local
    localStorage.setItem("abrirModalDespuesRecarga", "true");

    // Recargar la página
    location.reload();
});

// Evento de carga de la página
window.addEventListener('load', () => {
    // Verificar si la página se recargó debido al clic en el botón
    if (localStorage.getItem("abrirModalDespuesRecarga")) {
        tienda_submenu.classList.add("mostrar");
        localStorage.removeItem("abrirModalDespuesRecarga");
    }
});
cerrar.addEventListener('click', () => {

    tienda_submenu.classList.remove("mostrar")

});
cerrar2.addEventListener('click', () => {

    tienda_submenu.classList.remove("mostrar")

});
//funcion flecha para moviles//
const abajo = document.querySelector(".flecha")
const zlider = document.querySelector(".slider")
const arriba = document.querySelector(".flecha")
abajo.addEventListener("click", () => {
    zlider.scrollTop += 15000



})
zlider.addEventListener("scroll", () => {
    valor_final_scroll_top = zlider.scrollTop

    let scrollsito = zlider.scrollTop

    let punto_partida = 2889
    let punto_medio = 10


    if (scrollsito <= punto_partida) {
        abajo.classList.remove("rotar1")
        abajo.addEventListener("click", () => {
            zlider.scrollTop += 15000



        })


    } else if (scrollsito >= 2900) {
        abajo.classList.add("rotar1")
        abajo.addEventListener("click", () => {
            zlider.scrollTop -= 15000



        })

    }


})
                    //deplegar alerta guardado correctamente formulario//
                    document.getElementById('enviar-todos').addEventListener('click',function() {
                        var forms=document.querySelectorAll('.tarjeta-carrito-container');
                        forms.forEach(function(form){
                            form.submit()

                        })
                    })                    