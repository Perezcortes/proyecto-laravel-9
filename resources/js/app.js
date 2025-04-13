require('./bootstrap'); 
// Carga el archivo 'bootstrap.js' que generalmente contiene la configuración inicial de JavaScript,
// como la carga de librerías como Axios y la configuración de headers para solicitudes HTTP.

import Alpine from 'alpinejs';
// Importa la biblioteca Alpine.js, un framework JavaScript liviano para crear interfaces reactivas.

window.Alpine = Alpine;
// Asigna Alpine a la ventana global para que sea accesible desde cualquier parte del frontend.

Alpine.start();
// Inicializa Alpine.js para que comience a funcionar en los componentes declarados en el HTML.

import Swal from 'sweetalert2';
