import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss', 'resources/css/app.css', 'resources/css/page.css', 'resources/js/app.js','resources/js/main.js',],
            refresh: true,
        }),
    ],
});
