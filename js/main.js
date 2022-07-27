addEventListener('DOMContentLoaded', () =>{
    const btnMenu = document.querySelector('.btn-menu')
    if (btnMenu) { 
        btnMenu.addEventListener('click' , () =>{
            const menuItems = document.querySelector('.menu__items')
            menuItems.classList.toggle('show')
        })
    }
})

function showForm (op) {
    if (op == 1) {
        document.formularioContacto.style.display = "revert";
        document.formularioCliente.style.display = "none";
        document.formularioCv.style.display = "none";
        document.getElementsByClassName("formularioCliente").disabled = true;
        document.getElementsByClassName("formularioCv").disabled = true;
    }
    if (op == 2) {
        document.formularioContacto.style.display = "none";
        document.formularioCliente.style.display = "revert";
        document.formularioCv.style.display = "none";
        document.formularioContacto.disabled = true;
        document.formularioCv.disabled = true;
    }
    if (op == 3) {
        document.formularioContacto.style.display = "none";
        document.formularioCliente.style.display = "none";
        document.formularioCv.style.display = "revert";
        document.formularioCliente.disabled = true;
        document.formularioContacto.disabled = true;
    }
}