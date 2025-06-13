<!doctype html>
<html lang="es">
    <head>
        <title>Londono's Immigration Advisors</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="/LIA/assets/img/mini_logo.png">
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <!-- Estilos propios -->
        <link rel="stylesheet" href="/LIA/assets/CSS/navbar.css" />
        <link rel="stylesheet" href="/LIA/assets/CSS/footer.css" />
        <link rel="stylesheet" href="/LIA/assets/CSS/inicio.css" />
        <link rel="stylesheet" href="/LIA/assets/CSS/quienes-somos.css" />
        <link rel="stylesheet" href="/LIA/assets/CSS/servicios.css" />
        <link rel="stylesheet" href="/LIA/assets/CSS/testimonios.css" />
        <link rel="stylesheet" href="/LIA/assets/CSS/contactanos.css" />
        <link rel="stylesheet" href="/LIA/assets/CSS/consulta.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
    </head>

    <body>
        <header>
            <div>
                <?php include_once ('navbar.php'); ?>
            </div>            
        </header>
        <main>
            <div>
                <?php include_once ('ruteador.php');
                      include_once ('vistas/paginas/inicio.php');
                      include_once ('vistas/paginas/quienes-somos.php');
                      include_once ('vistas/paginas/servicios.php');
                      include_once ('vistas/paginas/testimonios.php');
                      include_once ('vistas/paginas/contactanos.php');
                      include_once ('vistas/paginas/consulta.php');

                ?>
            </div>
        </main>
        <footer>
            <div>
                <?php include_once ('footer.php'); ?>
            </div>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
