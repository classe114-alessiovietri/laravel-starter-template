import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Compila il mio file scss in css (che verrà messo dentro public)
                'resources/scss/app.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            // Creiamo un nome alternativo al percorso /resources/
            '~resources': '/resources/'
        }
    },
});
