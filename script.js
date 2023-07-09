const adicionar_open = document.getElementById('adicionar_open');
const adicionar_close = document.getElementById('adicionar_close');
const adicionar_panel = document.getElementById('adicionar_panel');

function loginModalState() {
    if (adicionar_panel.classList.contains('hidden')) {
        // Show modal
        adicionar_panel.classList.remove('hidden');
        adicionar_panel.classList.add('flex');

        // Start animation open
        adicionar_panel.classList.add('adicionar_open');
    } else {
        // Delete modal
        adicionar_panel.classList.add('hidden');
        adicionar_panel.classList.remove('flex');

        // Remove animation open
        adicionar_panel.classList.remove('adicionar_open');
    }
}

adicionar_open.addEventListener('click', loginModalState);
adicionar_close.addEventListener('click', loginModalState);


