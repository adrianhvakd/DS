<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-text-primary {
            color: #27ae60;
        }
        .custom-bg-primary {
            background-color: #27ae60;
        }
        .custom-btn-primary {
            background-color: #27ae60;
            border-color: #27ae60;
            color: white;
        }
        .custom-btn-primary:hover {
            background-color: #219653;
        }
    </style>
</head>
<body>
    <?php 
    include 'header/index.php'
    ?>
    
    <!-- Encabezado -->
    <section class="py-5 custom-bg-primary text-white text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Nosotros</h1>
            <p class="lead">Conoce quiénes somos y nuestra misión</p>
        </div>
    </section>
    
    <!-- Quiénes somos -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h2 class="mb-4 custom-text-primary">Quiénes Somos</h2>
                    <p>Somos una organización sin fines de lucro dedicada a mejorar la calidad de vida de comunidades vulnerables. Desde nuestra fundación en 2015, hemos trabajado con pasión y dedicación para crear un impacto positivo y duradero.</p>
                    <p>Nuestro equipo está formado por profesionales comprometidos y voluntarios que comparten la visión de un mundo más justo y equitativo para todos.</p>
                </div>
                <div class="col-md-6">
                    <img src="/api/placeholder/500/300" alt="Nuestro equipo" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Misión y Visión -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="card-title custom-text-primary">Nuestra Misión</h3>
                            <p>Trabajamos para proporcionar soluciones sostenibles que mejoren las condiciones de vida de las comunidades más necesitadas, promoviendo su desarrollo y autonomía.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="card-title custom-text-primary">Nuestra Visión</h3>
                            <p>Aspiramos a un mundo donde cada persona tenga acceso a recursos básicos, oportunidades de crecimiento y el apoyo necesario para alcanzar su pleno potencial.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Nuestro Impacto -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4 custom-text-primary">Nuestro Impacto</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <h3 class="h2 custom-text-primary">5000+</h3>
                    <p>Personas beneficiadas</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h3 class="h2 custom-text-primary">20+</h3>
                    <p>Proyectos completados</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h3 class="h2 custom-text-primary">10+</h3>
                    <p>Comunidades impactadas</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA -->
    <section class="py-4 bg-light">
        <div class="container text-center">
            <h2 class="mb-3 custom-text-primary">Únete a Nuestra Causa</h2>
            <p class="mb-4">Tu contribución puede marcar la diferencia en la vida de muchas personas.</p>
            <a href="#" class="btn custom-btn-primary px-4 py-2">Donar ahora</a>
        </div>
    </section>
    
    <?php 
    include 'footer/index.php'
    ?>
    
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>