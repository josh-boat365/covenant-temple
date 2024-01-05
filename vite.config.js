import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/components/base/base.css',
                'resources/custom/custom.css',
                'resources/components/base/core.min.js',
                'resources/components/base/script.js',
            ],
            refresh: true,
        }),
    ],
});