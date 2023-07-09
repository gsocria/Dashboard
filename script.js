const login_open = document.getElementById('login_open');
const login_close = document.getElementById('login_close');
const login_panel = document.getElementById('login_panel');

function loginModalState() {
    if (login_panel.classList.contains('hidden')) {
        // Show modal
        login_panel.classList.remove('hidden');
        login_panel.classList.add('flex');

        // Start animation open
        login_panel.classList.add('card_open');
    } else {
        // Delete modal
        login_panel.classList.add('hidden');
        login_panel.classList.remove('flex');

        // Remove animation open
        login_panel.classList.remove('card_open');
    }
}

login_open.addEventListener('click', loginModalState);
login_close.addEventListener('click', loginModalState);