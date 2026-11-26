import './bootstrap';
import htmx from 'htmx.org';

window.htmx = htmx;

document.addEventListener('DOMContentLoaded', () => {
    document.body.addEventListener('htmx:configRequest', (event) => {
        const csrfMeta = document.querySelector('meta[name="csrf-token"]');
        if (csrfMeta) {
            event.detail.headers['X-CSRF-TOKEN'] = csrfMeta.content;
        }
    });
});
