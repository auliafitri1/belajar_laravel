// import { defineConfig } from 'vite';
//  import laravel from 'laravel-vite-plugin';

//  export default defineConfig({
//  plugins: [
//  laravel({
//  input: [
//  'resources/css/app.css',
//  'resources/js/app.js'
//  ],
//  refresh: true,
//  }),
//  ],
//  });


// import { defineConfig } from 'vite';
//  import laravel from 'laravel-vite-plugin';

//  export default defineConfig({
//  plugins: [
//  laravel({
//  input: 'resources/js/app.js',
//  refresh: true,
//  }),
//  ],
//  });

// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: [
//                 'resources/css/app.css',
//                 'resources/js/app.js',
//             ],
//             refresh: true,
//         }),
//     ],
//     server: {
//         host: '127.0.0.1',
//         port: 5173
//     }
// });


import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
        }
    }
});
