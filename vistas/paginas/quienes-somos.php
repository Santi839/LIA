<div id="quienessomos" class="quienes-somos">
    <div class="quienes-somos-container">
        <div class="quienes-somos-imagen">
            <img src="\LIA\assets\img\img_nosotros.jpg" alt="Equipo de LIA">
            <div class="imagen-decoracion"></div>
        </div>
        <div class="quienes-somos-contenido">
            <h1 class="quienes-somos-titulo">Quiénes Somos</h1>
            <p class="quienes-somos-descripcion">
                Somos una compañía dedicada a brindar servicios y trámites 
                de inmigración, comprometidos en ayudarte a lograr tu sueño 
                de vivir y trabajar en los Estados Unidos. Nuestro equipo está 
                compuesto por personal calificado y certificado que te 
                acompañará en cada paso del proceso.
            </p>
        </div>
    </div>
</div>

<main id="servicios" class="servicios-container">
    <section class="servicios-header">
        <h1>Nuestros Servicios</h1>
        <p>Proveemos una amplia gama de servicios para facilitar tu proceso migratorio</p>
    </section>

    <section class="servicios-content">
        <div class="servicios-list">
            <div class="servicio-item" data-index="0">
                <h2>Solicitudes de Asilo</h2>
                <p>Asesoría y gestión completa para obtener el asilo en los Estados Unidos.</p>
            </div>

            <div class="servicio-item" data-index="1">
                <h2>Permisos de Trabajo</h2>
                <p>Facilitamos la obtención de permisos de trabajo en diversas jurisdicciones, gestionando todo el proceso desde la solicitud hasta la aprobación final, asegurando el cumplimiento legal y normativo.</p>
            </div>

            <div class="servicio-item" data-index="2">
                <h2>Cambio de Estatus Migratorio</h2>
                <p>Asistimos en el cambio de estatus migratorio, gestionando la documentación y procedimientos necesarios para ajustar tu estatus legal de manera eficiente y sin complicaciones.</p>
            </div>

            <div class="servicio-item" data-index="3">
                <h2>Procesos Migratorios para Migrantes indocumentados</h2>
                <p>Apoyamos a migrantes indocumentados en la regularización de su estatus migratorio, ofreciendo soluciones legales y seguras para alcanzar la estabilidad migratoria.</p>
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
        // Desplegar servicio al hacer clic
        const items = document.querySelectorAll('.servicio-item');
        const imgServicios = [
            'assets/img/img_servicios.jpg',
            'assets/img/img_servicios2.jpg',
            'assets/img/img_servicios3.jpg',
            'assets/img/img_servicios4.jpg'
        ];
        const serviciosImg = document.querySelector('.servicios-image img');
        items.forEach(item => {
            item.addEventListener('click', function() {
                items.forEach(i => {
                    i.classList.remove('desplegado');
                    const p = i.querySelector('p');
                    if (p) p.style.display = 'none';
                });
                this.classList.add('desplegado');
                const p = this.querySelector('p');
                if (p) p.style.display = 'block';
                // Cambiar imagen según índice
                const idx = parseInt(this.getAttribute('data-index'));
                if (serviciosImg && imgServicios[idx]) {
                    serviciosImg.src = imgServicios[idx];
                }
            });
        });
        // Por defecto, el primero desplegado y los demás ocultos
        items.forEach((item, idx) => {
            const p = item.querySelector('p');
            if (p) p.style.display = (idx === 0) ? 'block' : 'none';
        });
        // Imagen por defecto
        if (serviciosImg) serviciosImg.src = imgServicios[0];
    });
</script>


