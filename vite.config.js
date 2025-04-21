import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        cors: {
            origin: [
                "http://localhost:5174",
                "http://localhost:8000",
                "http://localhost:3000",
            ],
        },
    },
});
