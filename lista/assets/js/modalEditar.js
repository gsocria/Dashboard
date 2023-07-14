let editar_open = document.getElementById('editar_open');
const editar_close = document.getElementById('editar_close');
const editar_panel = document.getElementById('editar_panel');
const editar_cancelar = document.getElementById('editar_cancelar');


function editar() {
    
    if (editar_panel.classList.contains('hidden')) {
        // Show modal
        editar_panel.classList.remove('hidden');
        editar_panel.classList.add('flex');

        // Start animation open
        editar_panel.classList.add('open');
    } else {
        // Delete modal
        editar_panel.classList.add('hidden');
        editar_panel.classList.remove('flex');

        // Remove animation open
        editar_panel.classList.remove('open');
    }
}

editar_close.addEventListener('click', editar);
editar_cancelar.addEventListener('click', editar);


