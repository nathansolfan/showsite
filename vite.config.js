import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/home.js',
                'resources/js/projectAnimation.js',
                'resources/js/textAnimation.js',
                'resources/js/scrollText.js' // add your new file here


                ],
            refresh: true,
        }),
    ],
});
