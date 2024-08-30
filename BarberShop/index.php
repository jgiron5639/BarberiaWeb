<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbería Showing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./CSS/inicio.css">
</head>
<body>
    <!-- Header -->
    <header class="bg-dark text-white text-center py-4">
        <div class="container">
            <h1>Barbería Showing</h1>
            <p>Cortes únicos y modernos</p>
            <a href="#contacto" class="btn btn-primary mt-3">Reserva tu cita</a>
        </div>
    </header>

    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Showing</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galeria">Galería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero bg-image text-center text-white d-flex align-items-center justify-content-center" style="background-image: url('./IMG/barberia-hero.jpg'); height: 70vh; background-size: cover;">
        <div>
            <h2 id="titulo">Transforma tu estilo</h2>
            <p id="titulo">Barbería profesional con los mejores estilistas</p>
            <a href="#servicios" class="btn btn-light mt-3">Ver servicios</a>
        </div>
    </section>

    <!-- Servicios -->
    <section id="servicios" class="container my-5">
        <h2 class="text-center mb-4">Nuestros Servicios</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <i class="fas fa-cut fa-3x mb-3"></i>
                <h4>Corte de Cabello</h4>
                <p>Estilos modernos y clásicos</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-beard fa-3x mb-3"></i>
                <h4>Afeitado</h4>
                <p>Barbas perfectamente perfiladas</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-spa fa-3x mb-3"></i>
                <h4>Tratamiento Capilar</h4>
                <p>Cuida tu cabello con los mejores productos</p>
            </div>
        </div>
    </section>

    <!-- Galería -->
    <section id="galeria" class="container my-5">
    <h2 class="text-center mb-4">Galería de Cortes</h2>
    <div id="cortesCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./IMG/Undercut.jpg" class="d-block w-100" alt="Undercut">
            </div>
            <div class="carousel-item">
                <img src="./IMG/Fade.jpg" class="d-block w-100" alt="Fade">
            </div>
            <div class="carousel-item">
                <img src="./IMG/Buzz Cut.jpg" class="d-block w-100" alt="Buzz Cut">
                <div class="carousel-caption d-none d-md-block">
                    <!-- Contenido de la leyenda -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="./IMG/Pompadour.jpg" class="d-block w-100" alt="Pompadour">
            </div>
            <div class="carousel-item">
                <img src="./IMG/Quiff.jpg" class="d-block w-100" alt="Quiff">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#cortesCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#cortesCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>


    <!-- Testimonios -->
    <section id="testimonios" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Lo que dicen nuestros clientes</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <blockquote class="blockquote">
                        <p class="mb-0">"El mejor corte de mi vida, la atención fue excepcional."</p>
                        <footer class="blockquote-footer">Juan Pérez</footer>
                    </blockquote>
                </div>
                <div class="col-md-4">
                    <blockquote class="blockquote">
                        <p class="mb-0">"¡Increíble servicio! Definitivamente volveré."</p>
                        <footer class="blockquote-footer">Ana López</footer>
                    </blockquote>
                </div>
                <div class="col-md-4">
                    <blockquote class="blockquote">
                        <p class="mb-0">"Ambiente acogedor y estilistas profesionales."</p>
                        <footer class="blockquote-footer">Carlos García</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="container my-5">
        <h2 class="text-center mb-4">Contáctanos</h2>
        <div class="row">
            <div class="col-md-6">
                <h4>Escríbenos</h4>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col-md-6">
                <h4>Visítanos</h4>
                <p><i class="fas fa-map-marker-alt"></i> Calle Falsa 123, Ciudad, País</p>
                <p><i class="fas fa-phone"></i> +123 456 7890</p>
                <p><i class="fas fa-envelope"></i> info@barberiashowing.com</p>
                <div id="mapa" class="mt-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345096443!2d144.953736315319!3d-37.81627944210339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf5774ff46c2d5bfb!2sVictoria%20Harbour%20Promenade%2C%20Docklands%20VIC%203008%2C%20Australia!5e0!3m2!1sen!2sus!4v1620309943522!5m2!1sen!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 Barbería Showing. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
