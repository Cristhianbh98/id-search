import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
    optimizeDeps: {
        esbuildOptions: {
          target: 'esnext'
        }
    },
    build: {
        target: 'esnext'
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ]
});
