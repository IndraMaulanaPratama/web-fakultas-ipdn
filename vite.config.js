import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
// import livewire from '@defstudio/vite-livewire-plugin'; // <-- import
import FullReload from 'vite-plugin-full-reload'; // <-- import

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        // {
        //     name: "blade",
        //     handleHotUpdate({ file, server }) {
        //         if (file.endsWith(".blade.php")) {
        //             server.ws.send({
        //                 type: "full-reload",
        //                 path: "*",
        //             });
        //         }
        //     },
        // },
        // livewire({
        //     // <-- tambahkan livewire plugin
        //     refresh: ["resources/css/app.css"],
        // }),
        FullReload([
            // <-- tambahkan plugin
            "resources/views/**",
            "routes/**",
        ]),
    ],
});
