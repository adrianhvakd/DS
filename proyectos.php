<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="header/style.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
		include 'header/index.php'
	?>
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