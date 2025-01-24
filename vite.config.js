import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js',
                    'resources/css/auth.css','resources/js/auth.js',
                    'resources/css/config.css','resources/js/config.js'],
            refresh: true,
        }),
    ],
});
