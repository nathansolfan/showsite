import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue";
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/home.js',
                'resources/js/projectAnimation.js',
                'resources/js/textAnimation.js',
                'resources/js/scrollText.js' // add new file here
                ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: true
            }
        })
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js'
        }
    }

});
