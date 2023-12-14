const toggle = document.getElementById('toggle');
const open = document.getElementById('open');
const close = document.getElementById('close');
const modal = document.getElementById('modal');

function closeNavbar() {
    if (
        document.body.classList.contain('show-nav') &&
        e.target != toggle &&
        !toggle.contains(e.target) &&
        e.target !== mavbar &&
        !closeNavbar.contains(e.target)
    ) {
        document.body.classList.toggle('show-nav');
        document.body.removeEventListener('click', 'closeNavbar');
    } else if (!document.body.classList.contains('show-nav')) {
        document.body, removeEventListener('click', 'closeNavbar');
    }
}

//menu slider

toggle.addEventListener('click', () => {
    document.body.classList.toggle('show-nav');
    document.body.addEventListener('click', closeNavbar());
});

//modal
open.addEventListener('click', () => modal.classList.add('show-modal'));
close.addEventListener('click', () => modal.classList.remove('show-modal'));
window.addEventListener('click', (e) =>
    e.target == modal ? modal.classList.remove('show-modal') : false
);








