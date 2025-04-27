<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="header/style.css">
  <link rel="stylesheet" type="text/css" href="style_voluntariado.css">
  <title>Voluntarios - Ayuda y Participación</title>
</head>
<body class="bd">
  <?php 
    include 'header/index.php'
  ?>
  
  <section class="vol-section py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h3 class="vol-title text-center">Voluntarios</h3>
          <p class="vol-description">
            Nuestros voluntarios son personas maravillosas que sienten el deseo de ayudar y 
            nosotros simplemente somos un puente entre ellos y nuestros niños que están siempre 
            felices de recibir nuevos aprendizajes y vivir experiencias nuevas que podrían cambiar 
            sus vidas, gracias a la pasión y el cariño que ponen nuestros voluntarios enseñando su arte 
            o ciencia podríamos estar sembrando la semillita de futuros bomberos, ingenieros, bailarines, 
            artistas y más. Si sientes que podrias regalar algo de tu arte y tu conocimiento este es el mejor 
            lugar para hacerlo, nuestros niños te tendrán siempre en sus corazones.
          </p>
        </div>
      </div>
      
      <div class="vol-image-container mt-5">
        <div class="row g-4">
          <div class="col-md-3 col-sm-6">
            <div class="vol-card h-100">
              <img src="./img/educacion.webp" class="vol-image w-100" alt="Voluntarios en acción">
              <div class="card-body text-center">
                <h5 class="card-title" style="color: #27ae60">Educación</h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="vol-card h-100">
              <img src="./img/arte.webp" class="vol-image w-100" alt="Voluntarios en acción">
              <div class="card-body text-center">
                <h5 class="card-title" style="color: #27ae60">Arte y Cultura</h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="vol-card h-100">
              <img src="./img/deportes.webp" class="vol-image w-100" alt="Voluntarios en acción">
              <div class="card-body text-center">
                <h5 class="card-title" style="color: #27ae60">Deporte</h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="vol-card h-100">
              <img src="./img/ambiente.webp" class="vol-image w-100" alt="Voluntarios en acción">
              <div class="card-body text-center">
                <h5 class="card-title" style="color: #27ae60">Medio Ambiente</h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="vol-card h-100">
              <img src="./img/recreacion.webp" class="vol-image w-100" alt="Voluntarios en acción">
              <div class="card-body text-center">
                <h5 class="card-title" style="color: #27ae60">Juegos y Recreación</h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="vol-card h-100">
              <img src="./img/nutricion.webp" class="vol-image w-100" alt="Voluntarios en acción">
              <div class="card-body text-center">
                <h5 class="card-title" style="color: #27ae60">Nutrición y Alimentación</h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="vol-card h-100">
              <img src="./img/psico.webp" class="vol-image w-100" alt="Voluntarios en acción">
              <div class="card-body text-center">
                <h5 class="card-title" style="color: #27ae60">Apoyo Psicologico</h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="vol-card h-100">
              <img src="./img/animal.webp" class="vol-image w-100" alt="Voluntarios en acción">
              <div class="card-body text-center">
                <h5 class="card-title" style="color: #27ae60">Conexión Animal</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="vol-form-section container my-5 py-5">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <h1 class="vol-form-title mb-4">Oportunidades de Voluntariado</h1>
        <p class="vol-form-description">Únete a nuestra red de voluntarios y marca la diferencia con tu tiempo y habilidades. Contáctanos o llena el formulario para participar en los proyectos que más te interesen.</p>
        
        <form class="mt-5">
          <div class="row g-4">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="nombre" class="vol-label form-label">Nombre completo</label>
                <input type="text" class="vol-input form-control" id="nombre" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="correo" class="vol-label form-label">Correo electrónico</label>
                <input type="email" class="vol-input form-control" id="correo" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="telefono" class="vol-label form-label">Teléfono</label>
                <input type="tel" class="vol-input form-control" id="telefono">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="interes" class="vol-label form-label">¿En qué área te gustaría participar?</label>
                <select class="vol-input form-select" id="interes">
                  <option>Educación</option>
                  <option>Salud</option>
                  <option>Medio ambiente</option>
                  <option>Eventos</option>
                  <option>Otro</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-4">
                <label for="mensaje" class="vol-label form-label">Mensaje adicional</label>
                <textarea class="vol-input form-control" id="mensaje" rows="4"></textarea>
              </div>
            </div>
            <div class="col-12 text-center">
              <button type="submit" class="vol-submit-btn btn btn-primary btn-lg">
                <i class="bi bi-heart-fill me-2"></i>Enviar solicitud
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
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
  <?php 
    include 'footer/index.php'
  ?>
</body>
</html>