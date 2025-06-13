
    <div id="testimonios" class="testimonios-container">
        <h1>Testimonios</h1>
        <p class="subtitle">Lo que dicen nuestros clientes sobre nosotros.</p>

        <div class="slider-container">
            <button class="slider-arrow prev" onclick="prevSlide()">&#10094;</button>
            
            <div class="testimonial-slider">
                <div class="testimonial-slide">
                    <p class="testimonial-text">Gracias a su equipo, ahora tengo mi permiso de trabajo. ¡Altamente recomendados!</p>
                    <p class="testimonial-author">– Juan P.</p>
                </div>
                
                <div class="testimonial-slide">
                    <p class="testimonial-text">Me guiaron durante todo el proceso de asilo. ¡Estoy muy agradecida!</p>
                    <p class="testimonial-author">– María L.</p>
                </div>
                
                <div class="testimonial-slide">
                    <p class="testimonial-text">Profesionales y atentos. Mi cambio de estatus fue más fácil de lo que esperaba.</p>
                    <p class="testimonial-author">– Carlos M.</p>
                </div>
                
            </div>

            <button class="slider-arrow next" onclick="nextSlide()">&#10095;</button>
        </div>
    </div>

    <div class="why-choose-us">
        <h2>Por Qué Elegirnos</h2>
        
        <div class="features-container">
            <div class="feature">
                <div class="feature-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3>Personal Calificado</h3>
                <p>Nuestro equipo está compuesto por expertos certificados en leyes migratorias.</p>
            </div>

            <div class="feature">
                <div class="feature-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3>Atención Personalizada</h3>
                <p>Ofrecemos atención personalizada y asesoría en cada etapa del proceso.</p>
            </div>

            <div class="feature">
                <div class="feature-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3>Resultados Comprobados</h3>
                <p>Hemos ayudado a cientos de personas a alcanzar su sueño americano.</p>
            </div>
        </div>
    </div>

    <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.testimonial-slide');
    let slideInterval;

    function showSlide(n) {
        slides.forEach(slide => slide.style.display = 'none');
        
        currentSlide = n;
        if (currentSlide >= slides.length) currentSlide = 0;
        if (currentSlide < 0) currentSlide = slides.length - 1;
        
        slides[currentSlide].style.display = 'block';
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
        resetInterval();
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
        resetInterval();
    }

    function resetInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 3000);
    }

    // Initialize the slider
    document.addEventListener('DOMContentLoaded', function() {
        showSlide(0);
        slideInterval = setInterval(nextSlide, 3000);
    });
    </script>
