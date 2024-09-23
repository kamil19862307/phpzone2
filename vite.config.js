import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/font-awesome.css',
                'resources/css/allStyles.min.css',
                'resources/js/app.js',
                'resources/js/js.js',
                'resources/js/tag.js',
                'resources/js/users.min.js',
            ],
            refresh: true,
        }),
    ],
});
