// script.js
// Este archivo maneja la interactividad del menú móvil y la galería de imágenes.

document.addEventListener('DOMContentLoaded', () => {
    // --- Lógica para el menú móvil (ya existente y mejorada) ---
    const menuToggle = document.querySelector('.menu-toggle');
    const mainNav = document.querySelector('.main-nav');
    const navList = document.querySelector('.main-nav .nav-list'); // Obtenemos la lista de navegación

    if (menuToggle && mainNav && navList) {
        menuToggle.addEventListener('click', () => {
            navList.classList.toggle('open'); // Alterna la clase 'open' en la lista (no en mainNav)
            // Cambia el ícono de menú (hamburguesa) a 'close' (X) y viceversa
            menuToggle.textContent = navList.classList.contains('open') ? 'close' : 'menu';
        });

        // Opcional: Cerrar el menú si se hace clic fuera de él
        document.addEventListener('click', (event) => {
            // Verifica si el menú está abierto Y el clic no fue dentro del área del menú/toggle
            if (navList.classList.contains('open') && !navList.contains(event.target) && !menuToggle.contains(event.target)) {
                navList.classList.remove('open');
                menuToggle.textContent = 'menu'; // Restaura el ícono de menú
            }
        });
    }

    // --- Lógica para la interactividad de la galería de imágenes ---
    const productMainImage = document.querySelector('.product-main-image');
    const thumbnails = document.querySelectorAll('.thumbnail-item');

    // Solo ejecuta esta lógica si existen la imagen principal y miniaturas
    if (productMainImage && thumbnails.length > 0) {
        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', () => {
                // 1. Remover la clase 'active' de todas las miniaturas
                thumbnails.forEach(t => t.classList.remove('active'));

                // 2. Añadir la clase 'active' a la miniatura clickeada
                thumbnail.classList.add('active');

                // 3. Cambiar la fuente (src) de la imagen principal a la imagen completa de la miniatura
                const fullImageUrl = thumbnail.getAttribute('data-full-image');
                productMainImage.src = fullImageUrl;
                // 4. Actualizar el texto alternativo (alt) de la imagen principal para accesibilidad
                productMainImage.alt = thumbnail.alt;
            });
        });
    }
});
