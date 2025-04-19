import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/filament.css',
                'resources/css/custom.css',
                'resources/css/all.css',
                'resources/js/all.js',
                'resources/css/fontawesome.css',
                'resources/css/card.css',
            ],
            refresh: true,
        }),
    ],
});
