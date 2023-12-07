import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/estilo.css', 'resources/js/estilo.js','resources/css/login.css','resources/css/membresia.css','resources/css/registrarse.css'],
            refresh: true,
        }),
    ],
});
