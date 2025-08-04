document.addEventListener('DOMContentLoaded', () => {
    console.log('El DOM ha sido cargado y analizado.');
    
    function calcularTotal() {
        const filas = document.querySelectorAll('tbody tr');
        let total = 0;
        filas.forEach(fila => {
            const subtotalTexto = fila.querySelector('td:last-child').textContent;
            const subtotalNumero = parseFloat(subtotalTexto.replace('$', '').replace(/\./g, ''));
            if (!isNaN(subtotalNumero)) {
                total += subtotalNumero;
            }
        });
        document.querySelector('.total-pago input').value = `$${total.toLocaleString('es-CO')}`;
    }
});
