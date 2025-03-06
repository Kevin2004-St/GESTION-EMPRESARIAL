document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        let alerta = document.getElementById('alerta-exito');
        if (alerta) {
            alerta.style.transition = "opacity 0.5s";
            alerta.style.opacity = "0";
            setTimeout(() => alerta.remove(), 500); // Se elimina después de la animación
        }
    }, 4000); // El mensaje desaparecerá después de 4 segundos
});

// Script para pagina movil
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    const navLinks = document.querySelector('.nav-links');
    
    if (mobileMenu) {
        mobileMenu.addEventListener('click', function() {
            navLinks.classList.toggle('active');
        });
    }
});