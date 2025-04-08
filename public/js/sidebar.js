
//Script para expandir y contraer los modulos del sidebar
document.addEventListener('DOMContentLoaded', function () {
    const toggles = document.querySelectorAll('.accordion-toggle');

    toggles.forEach(toggle => {
        toggle.addEventListener('click', function () {
            const content = this.nextElementSibling;

            if (content.classList.contains('open')) {
                content.style.maxHeight = null;
                content.classList.remove('open');
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
                content.classList.add('open');
            }
        });
    });
});

//Script para contraer y expander el sidebar
document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('sidebar');
    const toggle = document.getElementById('toggleSidebar');
    const body = document.body;

    toggle.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
        body.classList.toggle('sidebar-collapsed');
    });
});