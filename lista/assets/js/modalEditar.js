const editar_open = document.getElementById('editar_open');
const editar_close = document.getElementById('editar_close');
const editar_panel = document.getElementById('editar_panel');

function editar() {
    if (editar_panel.classList.contains('hidden')) {
        // Show modal
        editar_panel.classList.remove('hidden');
        editar_panel.classList.add('flex');

        // Start animation open
        editar_panel.classList.add('editar_open');
    } else {
        // Delete modal
        editar_panel.classList.add('hidden');
        editar_panel.classList.remove('flex');

        // Remove animation open
        editar_panel.classList.remove('editar_open');
    }
}

editar_open.addEventListener('click', editar);
editar_close.addEventListener('click', editar);