import { defineConfig } from 'vite';
import '../sass/app.scss';  // Zorg ervoor dat dit naar het juiste bestand verwijst
import 'variables'; // Voeg hier je variabelen toe
import 'mixins'; // Voeg hier je mixins toe
import 'components'; // Voeg hier je componenten toe
// resources/js/app.js
import 'bootstrap';
export default defineConfig({
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `@import "resources/sass/app.scss";`
            }
        }
    },
    build: {
        rollupOptions: {
            input: 'resources/sass/app.scss' // Zorg ervoor dat het juiste bestand wordt geladen
        }
    }
});
