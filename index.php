<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="header/style.css">
</head>
<body>
    <header>
        <?php
            include './header/index.php';
        ?>
    </header>

    <section>  
        <div class="container-fluid donation-hero">
            <h1>Transforma vidas con cada donacion</h1>
            <p>(empresa) facilita la gestión transparente y eficiente de donaciones para crear un impacto real en las comunidades que más lo necesitan.</p>
            <div class="donation-hero-buttons">
                <button type="submit" class="donation-btn-donate">Donar Ahora</button>
                <button type="submit" class="donation-btn-projects">Ver Proyectos</button>
            </div>
        </div>
    </section>

    <section class="donation-features-section">
        <div class="container">
            <div class="donation-section-header">
                <h2>Características principales</h2>
                <p>Nuestra plataforma ofrece una experiencia completa tanto para donantes como para organizaciones benéficas</p>
            </div>
            <div class="donation-features-grid">
                <div class="donation-feature-card">
                    <i class="bi bi-heart-fill fa-lg"></i>
                    <h3>Donaciones Seguras</h3>
                    <p class="donation-feature-desc">Proceso de donación simple y seguro con múltiples métodos de pago y protección total de datos.</p>
                </div>
                <div class="donation-feature-card">
                    <i class="bi bi-bar-chart-fill fa-lg"></i>
                    <h3 class="donation-feature-title">Seguimiento en tiempo real</h3>
                    <p class="donation-feature-desc">Observa cómo tus donaciones están siendo utilizadas con actualizaciones y métricas de impacto en tiempo real.</p>
                </div>
                <div class="donation-feature-card">
                    <i class="bi bi-people-fill fa-lg"></i>
                    <h3 class="donation-feature-title">Comunidad de donantes</h3>
                    <p class="donation-feature-desc">Conecta con otros donantes y organizaciones que comparten tus mismos valores e intereses.</p>
                </div>
                <div class="donation-feature-card">
                    <i class="bi bi-file-text fa-lg"></i>
                    <h3 class="donation-feature-title">Informes detallados</h3>
                    <p class="donation-feature-desc">Recibe informes periódicos sobre el impacto de tus donaciones y los avances de los proyectos.</p>
                </div>
                <div class="donation-feature-card">
                    <i class="bi bi-hand-index-thumb"></i>
                    <h3 class="donation-feature-title">Oportunidades de voluntariado</h3>
                    <p class="donation-feature-desc">Encuentra maneras de contribuir con tu tiempo y habilidades a proyectos que te inspiran.</p>
                </div>
                <div class="donation-feature-card">
                    <i class="bi bi-search fa-lg"></i>
                    <h3 class="donation-feature-title">Total transparencia</h3>
                    <p class="donation-feature-desc">Acceso completo a los registros financieros y operativos de las organizaciones y proyectos.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid donation-projects-wrapper">
            <div class="container">
                <h2>Proyectos Actuales</h2>
                <p>Conoce los proyectos que actualmente buscan apoyo y únete a las causas que más te importan</p>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="./img/cocina.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Cocina</h5>
                            <p class="card-text">Gracias a nuestras voluntarias francesas los niños aprendieron a preparar tostadas francesas y Crepes con manjar, fue una dulce experiencia para ellos.</p>
                            </div>
                            <div class="card-footer">
                                <div class="container">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="donation-submit-btn" data-bs-toggle="modal" data-bs-target="#donationModal1">
                                        Quiero Donar
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="donationModal1" tabindex="-1" aria-labelledby="donationModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="donationModalLabel1">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="donation-form">
                                                    <div class="mb-3">
                                                        <label for="nombreCompleto" class="form-label">Nombre Completo</label>
                                                        <input type="text" class="form-control" id="nombreCompleto" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="emailContacto" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="emailContacto" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="telefono" class="form-label">Teléfono (opcional)</label>
                                                        <input type="tel" class="form-control" id="telefono">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="mensaje" class="form-label">Mensaje (opcional)</label>
                                                        <textarea class="form-control" id="mensaje" rows="3"></textarea>
                                                    </div>
                                                        <button type="button" class="donation-close-btn" data-bs-dismiss="modal">Cerrar</button>
                                                        <button type="submit" class="donation-submit-btn">Enviar</button>
                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                    <div class="card h-100">
                        <img src="./img/Pintura.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Pintura</h5>
                        <p class="card-text">El arte ayuda a desarrollar la creatividad, la curiosidad, la capacidad de empatía, la capacidad de expresarse y transmitir emociones, ayuda a fortalecer la autoestima y la autoconfianza.</p>
                        </div>
                        <div class="card-footer">
                            <div class="container">
                                <!-- Button trigger modal -->
                                <button type="button" class="donation-submit-btn" data-bs-toggle="modal" data-bs-target="#donationModal2">
                                    Quiero Donar
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="donationModal2" tabindex="-1" aria-labelledby="donationModalLabel2" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="donationModalLabel2">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="donation-form">
                                                <div class="mb-3">
                                                    <label for="nombreCompleto" class="form-label">Nombre Completo</label>
                                                    <input type="text" class="form-control" id="nombreCompleto" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="emailContacto" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="emailContacto" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="telefono" class="form-label">Teléfono (opcional)</label>
                                                    <input type="tel" class="form-control" id="telefono">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="mensaje" class="form-label">Mensaje (opcional)</label>
                                                    <textarea class="form-control" id="mensaje" rows="3"></textarea>
                                                </div>
                                                    <button type="button" class="donation-close-btn" data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="donation-submit-btn">Enviar</button>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <div class="card h-100">
                        <img src="./img/experimentos.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Experimentos Cientificos</h5>
                        <p class="card-text">Nuestros niños juegan con su imaginación, en equipo construyen bases, refugios, casas, cuevas y demás con diversos materiales.</p>
                        </div>
                        <div class="card-footer">
                            <div class="container">
                                <!-- Button trigger modal -->
                                <button type="button" class="donation-submit-btn" data-bs-toggle="modal" data-bs-target="#donationModal3">
                                    Quiero Donar
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="donationModal3" tabindex="-1" aria-labelledby="donationModalLabel3" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="donationModalLabel3">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="donation-form">
                                                <div class="mb-3">
                                                    <label for="nombreCompleto" class="form-label">Nombre Completo</label>
                                                    <input type="text" class="form-control" id="nombreCompleto" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="emailContacto" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="emailContacto" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="telefono" class="form-label">Teléfono (opcional)</label>
                                                    <input type="tel" class="form-control" id="telefono">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="mensaje" class="form-label">Mensaje (opcional)</label>
                                                    <textarea class="form-control" id="mensaje" rows="3"></textarea>
                                                </div>
                                                    <button type="button" class="donation-close-btn" data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="donation-submit-btn">Enviar</button>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="donation-extra-section"></section>
    <section class="container">
    <div class="row mt-5">
      <div class="col-12">
          <div class="card shadow-sm border-0">
              <div class="card-body p-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3712.2998440145593!2d-71.90648882505941!3d-13.537146871438038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916e7edf8692efd5%3A0xb2151ede7622f88b!2sUniversidad%20Andina%20del%20Cusco!5e1!3m2!1ses-419!2spe!4v1745691722009!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
          </div>
      </div>
    </div>
  </section>
    <footer>
        <?php include './footer/index.php';?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>
</body>
</html>