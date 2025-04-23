
document.addEventListener('DOMContentLoaded', function () {
    const formularios = document.querySelectorAll('.form');

    formularios.forEach(formulario => {
        formulario.addEventListener('submit', function (e) {
            e.preventDefault(); 

            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esta acción!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    formulario.submit(); 
                }
            });
        });
    });
});
