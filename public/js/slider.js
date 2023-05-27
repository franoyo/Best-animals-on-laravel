
//funcion slider cards/

const izq = document.querySelector(".botoncito-izq")
const der = document.querySelector(".botoncito-derecho")
const slider = document.querySelector(".slider")
izq.addEventListener('click', () => {

    slider.scrollLeft -= 750

})
der.addEventListener('click', () => {

    slider.scrollLeft += 750

})
//funcion desplegar carrito de compras/
const tienda_submenu = document.getElementById("tienda-submenu")
const abrir = document.getElementById("carrito-boton")
const cerrar = document.getElementById("cerrar")
const cerrar2 = document.getElementById("pantalla-cerrar")

abrir.addEventListener('click', () => {

    tienda_submenu.classList.add("mostrar")

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

    console.log(scrollsito)
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