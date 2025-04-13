const mix = require('laravel-mix'); // Importa Laravel Mix, una herramienta que simplifica la configuración de Webpack

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix proporciona una API limpia y fluida para definir pasos de compilación
 | usando Webpack en aplicaciones Laravel. Por defecto, compila el archivo CSS
 | de la aplicación y agrupa todos los archivos JS.
 |
 */

mix
    // Compila el archivo JavaScript principal de la aplicación
    .js('resources/js/app.js', 'public/js')
    
    // Compila el archivo CSS principal y aplica los siguientes plugins de PostCSS
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'), // Permite importar archivos CSS dentro de otros
        require('tailwindcss'),    // Integra Tailwind CSS para estilos utilitarios
        require('autoprefixer'),   // Añade prefijos de navegador automáticamente para compatibilidad
    ]);
