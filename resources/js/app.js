import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

import lozad from 'lozad';

const observer = lozad('.lozad', {
    // Opsi konfigurasi lozad.js
});

observer.observe();

Alpine.start();


