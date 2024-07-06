import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: 'localhost',
        port: 3000, // Vite sẽ chạy trên cổng 3000
        proxy: {
            '^/(?!resources/|vite/|@vite)': {
                target: 'http://localhost:8000', // Laravel chạy trên cổng 8000
                changeOrigin: true,
                secure: false,
            },
        },
    },
});
