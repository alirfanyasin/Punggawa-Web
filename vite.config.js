import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            // input: ['public/build/assets/app-b5140d23.css', 'public/build/assets/app-b6d0f000.js'],
            refresh: true,
        }),
    ],
});


// import { defineConfig } from 'vite';

// export default defineConfig({
//   build: {
//     manifest: true,
//   },
// });