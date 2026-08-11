import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import path from 'node:path';

const themePath = path.resolve(
    __dirname,
    'wp-content/themes/company-theme'
);

export default defineConfig({
    plugins: [
        vue(),
    ],

    build: {
        outDir: path.resolve(
            themePath,
            'assets/build'
        ),

        emptyOutDir: true,

        rollupOptions: {
            input: {
                main: path.resolve(
                    themePath,
                    'assets/js/main.js'
                ),
            },

            output: {
                entryFileNames: 'js/[name].js',

                chunkFileNames: 'js/[name].js',

                assetFileNames: (assetInfo) => {
                    if (
                        assetInfo.name?.endsWith('.css')
                    ) {
                        return 'css/[name][extname]';
                    }

                    return 'assets/[name][extname]';
                },
            },
        },
    },
});