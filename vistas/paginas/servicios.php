<main id="servicios" class="servicios-container">
    <section class="servicios-header">
        <h1>Nuestros Servicios</h1>
        <p>Proveemos una amplia gama de servicios para facilitar tu proceso migratorio</p>
    </section>

    <section class="servicios-content">
        <div class="servicios-list">
            <div class="servicio-item">
                <h2>Solicitudes de Asilo</h2>
                <p>Asesoría y gestión completa para obtener el asilo en los Estados Unidos.</p>
            </div>

            <div class="servicio-item">
                <h2>Permisos de Trabajo</h2>
                <p></p>
            </div>

            <div class="servicio-item">
                <h2>Cambio de Estatus Migratorio</h2>
                <p></p>
            </div>

            <div class="servicio-item">
                <h2>Procesos Migratorios para Migrantes indocumentados</h2>
                <p></p>
            </div>
        </div>
        <div class="servicios-image">
            <img src="assets/img/img_servicios.jpg" alt="Consultoría de servicios migratorios">
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const servicioItems = entry.target.querySelectorAll('.servicio-item');
                    servicioItems.forEach((item, index) => {
                        setTimeout(() => {
                            item.classList.add('animate');
                        }, index * 200); // Add 200ms delay for each item
                    });
                    // Once animation is done, we can stop observing
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1 // Trigger when at least 10% of the element is visible
        });

        // Start observing the services section
        const serviciosSection = document.querySelector('.servicios-list');
        if (serviciosSection) {
            observer.observe(serviciosSection);
        }
    });
</script>