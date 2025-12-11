<<<<<<< HEAD
import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
=======
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
>>>>>>> 910b9517e79d88702b2a2abf97d9d92068540c19
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: ['resources/css/app.css', 'resources/js/app.js'],
=======
            input: ["resources/css/app.css", "resources/js/app.js"],
>>>>>>> 910b9517e79d88702b2a2abf97d9d92068540c19
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        cors: true,
        watch: {
<<<<<<< HEAD
            ignored: ['**/storage/framework/views/**'],
=======
            ignored: ["**/storage/framework/views/**"],
>>>>>>> 910b9517e79d88702b2a2abf97d9d92068540c19
        },
    },
});
