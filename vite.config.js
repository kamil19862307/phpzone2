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

                'resources/admin/assets/css/bootstrap.css',
                'resources/admin/assets/css/font-awesome.css',
                'resources/admin/assets/css/basic.css',
                'resources/admin/assets/css/custom.css',
                'resources/admin/assets/js/jquery-1.10.2.js',
                'resources/admin/assets/js/bootstrap.js',
                'resources/admin/assets/js/jquery.metisMenu.js',
                'resources/admin/assets/js/custom.js',
            ],
            refresh: true,
        }),
    ],
});
