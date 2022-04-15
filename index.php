<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome-free-6.0.0-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.0.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="inicio">
    <header>
        <nav class="navbar navbar-expand-md  mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item lista-nav">
                            <a class="nav-link py-1 px-3 px-sm-4 active" aria-current="page"
                                href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item lista-nav">
                            <a class="nav-link py-1 px-3 px-sm-4" href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item lista-nav">
                            <a class="nav-link py-1 px-3 px-sm-4" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item lista-nav">
                            <a class="nav-link py-1 px-3 px-sm-4" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-flex btn-submit">
                        <a class="btn btn-outline-success" type="submit">Descargar mi CV <i
                                class="fas fa-download"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 col-sm-4 pb-3">
                <div class="torpedo">
                    <img src="images/cohete.svg" alt="Cohete Violeta">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pb-3">
                <div class="bienvenido">
                    <p><strong>Bienvenid@ a mi sitio web sobre docencia en sistemas.</strong></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pb-3">
                <div class="d-flex btn-submit">
                    <a class="btn link" type="submit"><strong>Conocé mis proyectos</strong></a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="row mt-5 pb-3">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a class="inicio-icono" href="https://www.linkedin.com/in/santiago-maria-o´brien/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0 mails1">
                Estudiante <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE" class="mails">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-sm-start  pt-2 p-sm-0">
                <a href="mailto:santiago.m.obrien@accenture.com" class="mails">santiago.m.obrien@accenture.com</a>
            </div>
        </div> 
    </footer>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541164405274" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
</body>

</html>