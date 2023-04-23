import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import icons from 'vite-plugin-icons';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
    icons(),
  ],
});
