<link rel="stylesheet" href="assets/css/navbar.css">

<nav class="navbar">
        <div class="navbar-container">
            <a href="#inicio" class="logo">
                <img src="assets/img/logo_LIA.png" alt="LIA Logo">
            </a>
            <div class="nav-links">
                <a href="#inicio" class="active">Inicio</a>
                <a href="#servicios">Servicios</a>
                <a href="#testimonios">Testimonios</a>
                <a href="#quienessomos">Quiénes Somos</a>
                <a href="#contactanos">Contacto</a>
                <a href="#consulta" class="consulta-btn">Agenda tu Consulta Gratuita</a>
            </div>
        </div>
    </nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Obtener todos los enlaces del navbar
    const navLinks = document.querySelectorAll('.navbar a');

    // Agregar evento click a cada enlace
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Obtener el ID de la sección desde el href
            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            
            if (targetSection) {
                // Scroll suave hacia la sección
                targetSection.scrollIntoView({
                    behavior: 'smooth'
                });
                
                // Actualizar clase active
                navLinks.forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            }
        });
    });
});
</script>