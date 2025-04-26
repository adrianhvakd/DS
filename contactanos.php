<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="header/style.css">
    <style>
        .custom-bg-primary {
            background-color: #27ae60;
        }
        .custom-text-primary {
            color: #27ae60;
        }
        .custom-btn-primary {
            background-color: #27ae60;
            border-color: #27ae60;
            color: white;
        }
        .custom-btn-primary:hover {
            background-color: #219653;
            border-color: #219653;
        }
        .custom-form-control:focus {
            border-color: #27ae60;
            box-shadow: 0 0 0 0.25rem rgba(39, 174, 96, 0.25);
        }
        .custom-social-icon {
            color: #27ae60;
            font-size: 1.5rem;
            transition: transform 0.3s;
        }
        .custom-social-icon:hover {
            transform: translateY(-3px);
            color: #219653;
        }
        .custom-contact-info-icon {
            width: 45px;
            height: 45px;
            background-color: rgba(39, 174, 96, 0.1);
            color: #27ae60;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <?php 
    include 'header/index.php'
    ?>
    
    <main class="container py-5">
        <!-- Título y descripción -->
        <div class="row mb-5 text-center">
            <div class="col-12">
                <h1 class="display-4 fw-bold custom-text-primary">Contáctanos</h1>
                <p class="lead">Estamos aquí para ayudarte. Si tienes preguntas sobre nuestras iniciativas o deseas colaborar, no dudes en comunicarte con nosotros.</p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Formulario de contacto -->
            <div class="col-md-7">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body p-4">
                        <h2 class="fs-4 mb-4 custom-text-primary">Envíanos un mensaje</h2>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Nombre completo</label>
                                    <input type="text" class="form-control custom-form-control" id="name" placeholder="Tu nombre">
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Correo electrónico</label>
                                    <input type="email" class="form-control custom-form-control" id="email" placeholder="ejemplo@correo.com">
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label">Asunto</label>
                                    <input type="text" class="form-control custom-form-control" id="subject" placeholder="Asunto del mensaje">
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Mensaje</label>
                                    <textarea class="form-control custom-form-control" id="message" rows="5" placeholder="Escribe tu mensaje aquí..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="custom-btn-primary px-4 py-2">Enviar mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Información de contacto -->
            <div class="col-md-5">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body p-4">
                        <h2 class="fs-4 mb-4 custom-text-primary">Información de contacto</h2>
                        
                        <div class="d-flex mb-4">
                            <div class="custom-contact-info-icon me-3">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h5 class="fs-5">Dirección</h5>
                                <p class="text-muted mb-0">Av. Principal 123, Ciudad, País</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="custom-contact-info-icon me-3">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h5 class="fs-5">Teléfono</h5>
                                <p class="text-muted mb-0">+123 456 7890</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="custom-contact-info-icon me-3">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h5 class="fs-5">Correo electrónico</h5>
                                <p class="text-muted mb-0">info@tuorganizacion.org</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-2">
                            <div class="custom-contact-info-icon me-3">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h5 class="fs-5">Horario de atención</h5>
                                <p class="text-muted mb-0">Lunes a Viernes: 9:00 AM - 6:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Redes sociales -->
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h2 class="fs-4 mb-3 custom-text-primary">Síguenos</h2>
                        <p>Mantente conectado con nuestras últimas actualizaciones en redes sociales</p>
                        <div class="d-flex gap-3 mt-3">
                            <a href="#" class="custom-social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="custom-social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="custom-social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="custom-social-icon"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="custom-social-icon"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA para donaciones -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="bg-light p-4 p-md-5 text-center rounded-3 shadow-sm">
                    <h2 class="custom-text-primary mb-3">¿Listo para hacer una diferencia?</h2>
                    <p class="lead mb-4">Tu donación puede cambiar vidas. Cada contribución es importante para nuestra causa.</p>
                    <button href="#" class="custom-btn-primary btn-lg px-4">Donar ahora</button>
                </div>
            </div>
        </div>
        
        <!-- Mapa -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3712.2998440145593!2d-71.90648882505941!3d-13.537146871438038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916e7edf8692efd5%3A0xb2151ede7622f88b!2sUniversidad%20Andina%20del%20Cusco!5e1!3m2!1ses-419!2spe!4v1745691722009!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <?php 
    include 'footer/index.php'
    ?>
    
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>