<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- 
    - primary meta tags
  -->
  <title>Landing ItePrevengo Software</title>
  <meta name="title" content="Iteprevengo software" />
  <meta name="description" content="EVOLUCIONA DIGITALMENTE tu gestión de seguridad de salud en el trabajo" />

  <!-- 
    - favicon
  -->
  <link rel="icon" type="image/x-icon" href="./assets/images/iteprevengo.jfif" />

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet" />

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="./assets/css/funcStyles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="./assets/css/alertify.min.css">
  <!-- Default theme -->
  <link rel="stylesheet" href="./assets/css/default.min.css" />
  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

  <script src="./assets/js/jquery-3.5.1.min.js"></script>
</head>

<body>

  <!-- 
        - #BOTON-FLOTANTE-WHATSAPP
      -->
  <a href="https://wa.me/51943776124" class="btn-wsp" target="_blank">
    <ion-icon name="logo-whatsapp" class="whats"></ion-icon>
  </a>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">
      <a href="#home" class="logo-iteprevengo">
        <img src="./assets/images/iteprevengo-software.png" width="70%" height="24" alt="ItePrevengo" />
      </a>

      <nav class="navbar" data-navbar>
        <div class="navbar-top">
          <a href="#" class="logo">
            <img src="./assets/images/iteprevengo-software.png" width="160" height="24" alt="ItePrevengo" />
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">
          <li>
            <a href="https://www.iteprevengo.com/quienes-somos/" class="navbar-link">Nosotros</a>
          </li>
        </ul>

        <div class="wrapper" style="font-size: 15px;">
          <a href="mailto:consultas@iteprevengo.com" class="contact-link">consultas@iteprevengo.com</a>

          <a href="tel:943776124" class="contact-link">943 776 124</a>
        </div>

        <ul class="social-list">
          <li>
            <a href="https://www.linkedin.com/company/iteprevengo/" class="social-link" target="_blank">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.facebook.com/ItePrevengo" class="social-link" target="_blank">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.iteprevengo.com/" class="social-link" target="_blank">
              <ion-icon name="logo-dribbble"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://wa.me/51943776124" class="social-link" target="_blank">
              <ion-icon name="logo-whatsapp"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.youtube.com/@iteprevengo9643/" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>
        </ul>
      </nav>

      <!-- <a href="#" class="btn btn-primary">Free Trial</a> -->

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>
    </div>
  </header>

  <main>
    <article>

      <!-- 
        - #ABOUT
      -->
      <section class="section about titulo" aria-labelledby="about-label" id="home">
        <div class="container">
          <figure class="about-banner">
            <img src="./assets/images/itePrevengo.jpg" width="800" height="580" alt="about banner" class="w-100" />
          </figure>

          <div class="about-content">
            <!-- <p class="section-subtitle" id="about-label">Titulo</p> -->

            <h2 class="h2 section-title">
              <strong>EVOLUCIONA DIGITALMENTE</strong> <br />
              tu gestión de seguridad de salud en el trabajo
            </h2>
            <!-- AGREGAR CLASE PARA BAJARLO  P -->
            <p class="subtitulo-iteprevengo">
              Previene accidentes y enfermedades en el trabajo y evita sanciones y multas laborales.
            </p>

            <center>
              <button class="mas-info">
                <a href="#" class="btn btn-primary btn-abrir">Más información</a>
              </button>
            </center>
          </div>
        </div>

        <center>
          <button class="agendar-demo boton2 botoncell">
            <a href="https://landing-comitesst.iteprevengo.com/contacto-cita.php" class="btn btn-primary" target="_blank">Agendar una demo</a>
          </button>
        </center>
      </section>

      <!-- 
        - #POP-UP | REGISTRO
        -->
      <div class="pop-up">
        <div class="pop-up-wrap">
          <div class="pop-up-title">


          </div>

          <div class="datos-contacto">

            <div class="line"></div>


            <i id="close">&#10006;</i>

            <div class="sub-content">
              <h2> <strong>Agenda un tour guiado de nuestro software</strong></h2>


              <form action="./enviar.php" method="post" id="formulario" autocomplete="off">

                <input type="text" class="fon-campo" id="nombre" name="nombre" maxlength="40" placeholder="Escribe tu nombre completo">

                <input type="text" class="fon-campo" id="email" name="email" placeholder="Escribe tu correo electronico">

                <input type="text" class="fon-campo" id="phone" name="phone" maxlength="9" placeholder="Escribe tu número de celular">

                <button class="subs-send" id="btn-validar" type="submit" name="send">Enviar</button>

              </form>

            </div>

            <div class="line"></div>
          </div>
        </div>
      </div>



      <!-- 
        - #SERVICE - EL SERVICE es ESPACIO ARRIBA
      -->

      <!-- TEST CARRUSEL SERVICIOS  - MODULOS-->
      <section class="service respon">
        <div class="container">
          <h2 class="h2 section-title">Nuestros Módulos</h2>
          <div class="slide-container swiper">
            <div class="slide-content" id="slide-Modulos">
              <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                  <div class="image-content">
                    <span class="overlay-modulos"></span>

                    <div class="card-image">
                      <a href="https://youtu.be/SutLl9ydbWE" target="_blank">
                        <img src="assets/images/modulos/inspecciones.png" alt="" class="card-img">
                      </a>
                    </div>
                  </div>

                  <div class="card-content">
                    <h2 class="name">INSPECCIONES</h2>
                    <p class="description">Planifica tus inspecciones.</p>
                    <br>
                    <a href="https://youtu.be/SutLl9ydbWE" target="_blank">
                      <button class="button">Ver más</button>
                      <br>
                    </a>
                  </div>
                </div>
                <div class="card swiper-slide">
                  <div class="image-content">
                    <span class="overlay-modulos"></span>

                    <div class="card-image">
                      <a href="https://youtu.be/gGOTE_Zl9xw" target="_blank">
                        <img src="assets/images/modulos/comite-sst.png" alt="" class="card-img">
                      </a>
                    </div>
                  </div>

                  <div class="card-content">
                    <h2 class="name">ACTAS DE COMITÉ SST</h2>
                    <p class="description">Registra tus actas de comité.</p>
                    <br>
                    <a href="https://youtu.be/gGOTE_Zl9xw" target="_blank">
                      <button class="button">Ver más</button>
                    </a>
                  </div>
                </div>
                <div class="card swiper-slide">
                  <div class="image-content">
                    <span class="overlay-modulos"></span>

                    <div class="card-image">
                      <a href="https://youtu.be/m4eK8olFYYs" target="_blank">
                        <img src="assets/images/modulos/reportesSST.png" alt="" class="card-img report">
                      </a>
                    </div>
                  </div>

                  <div class="card-content">
                    <h2 class="name">REPORTES DE SST</h2>
                    <p class="description">Reporta actos y condiciones sub estándar, incidentes.</p>

                    <a href="https://youtu.be/m4eK8olFYYs" target="_blank">
                      <button class="button">Ver más</button>
                    </a>
                  </div>
                </div>
                <div class="card swiper-slide">
                  <div class="image-content">
                    <span class="overlay-modulos"></span>

                    <div class="card-image">
                      <a href="https://youtu.be/KEY8pkPPUNo" target="_blank">
                        <img src="assets/images/modulos/riesgo-psicosocial.png" alt="" class="card-img">
                      </a>
                    </div>
                  </div>

                  <div class="card-content">
                    <h2 class="name">RIESGO PSICOSOCIAL</h2>
                    <p class="description">Realiza tus encuestas sobre riesos psicosocial en tu empresa.</p>

                    <a href="https://youtu.be/KEY8pkPPUNo" target="_blank">
                      <button class="button">Ver más</button>
                    </a>
                  </div>
                </div>
                <div class="card swiper-slide">
                  <div class="image-content">
                    <span class="overlay-modulos"></span>

                    <div class="card-image">
                      <img src="assets/images/modulos/salud-ocupacional.png" alt="" class="card-img">
                    </div>
                  </div>

                  <div class="card-content">
                    <h2 class="name">SALUD OCUPACIONAL</h2>
                    <p class="description">Efectúa la vigilancia de salud ocupacional de tus colaboradores.</p>

                    <button class="button">Ver más</button>
                  </div>
                </div>
                <div class="card swiper-slide">
                  <div class="image-content">
                    <span class="overlay-modulos"></span>

                    <div class="card-image">
                      <a href="https://www.iteprevengo.com/modulos/" target="_blank">
                        <img src="assets/images/modulos/vermas.png" alt="" class="card-img">
                      </a>
                    </div>
                  </div>

                  <div class="card-content">
                    <h2 class="name">TODOS LOS MÓDULOS</h2>
                    <p class="description">Conoce todos nuestros módulos.</p>
                    <br>
                    <a href="https://www.iteprevengo.com/modulos/" target="_blank">
                      <button class="button">Ver más</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="swiper-button-next swiper-navBtn" id="next-modulo"></div>
            <div class="swiper-button-prev swiper-navBtn" id="prev-modulo"></div>
            <div class="swiper-pagination pag"></div>
          </div>
        </div>

        <center>
          <button class="agendar-demo">
            <a href="https://landing-comitesst.iteprevengo.com/contacto-cita.php" class="btn btn-primary" target="_blank">Agendar una demo</a>
          </button>
        </center>
      </section>

      <!-- UN SECTION PARA COMENTARIOS CLIENTES-->
      <section class="service respon">
        <div class="container">
          <!-- <p class="section-subtitle" id="about-label">Titulo</p> -->
          <h2 class="h2 section-title" style="margin-top: 50px;">Nuestros Clientes Opinan</h2>
          
          <div id="page" class="site">
            <div class="testimoniales">
              <div class="testi">
                <!-- <div class="head">
                  <h2 class="h2 section-title">Nuestros Clientes Opinan</h2>
                  <p class="section-subtitle" id="about-label">Titulo</p>
                </div> -->
                <div class="body swiper swiper-testimonio">
                  <ul class="swiper-wrapper">
                    <li class="swiper-slide">
                      <div class="wrapper">
                        <div class="thumbnail">
                          <img src="./assets/images/cliente1.jpeg" alt="Marco Luna Placencia" />
                        </div>
                        <div class="aside">
                          <p>
                            Confiamos y recomendamos usar ItePrevengo Software.
                            Porque gestionamos nuestro Plan Covid, obteniendo el
                            reporte y seguimiento oportuno de los detectados.
                            Con los módulos de: Inspección de SST, Entrega de
                            EPP's, Notificación de documentos y Vacunación;
                            logramos la participación de colaboradores y
                            líderes, y la conservación y acceso de todos los
                            registros.
                          </p>
                          <div class="name">
                            <h4>Marco Luna Placencia</h4>
                            <p>
                              Gerente de Administración de Personal y Nóminas -
                              GRUPO EFE
                            </p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="swiper-slide">
                      <div class="wrapper">
                        <div class="thumbnail">
                          <img src="./assets/images/cliente2.png" alt="Jaime Mendoza" />
                        </div>
                        <div class="aside">
                          <p>
                            Iteprevengo Software nos permite gestionar
                            eficientemente la sintomatología, seguimiento, altas
                            y documentación de casos Covid-19, de más de 8 mil
                            colaboradores de nuestros clientes, Asimismo integra
                            módulos de seguridad en el trabajo. Recomiendo usar
                            ItePrevengo Software.
                          </p>
                          <div class="name">
                            <h4>Jaime Mendoza</h4>
                            <p>
                              Especialista En Salud Ocupacional (CEO - SSMAT)
                            </p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="swiper-slide">
                      <div class="wrapper">
                        <div class="thumbnail">
                          <img src="./assets/images/cliente3.jpg" alt="Jose Moises Yupanqui" />
                        </div>
                        <div class="aside">
                          <p>
                            El módulo de elecciones de comité de seguridad y
                            salud de ItePrevengo Software, permitió que nuestros
                            colaboradores elijan a sus representantes de forma
                            sencilla y segura con resultados inmediatos y
                            documentación exigida por ley.
                          </p>
                          <div class="name">
                            <h4>Jose Moises Yupanqui</h4>
                            <p>
                              Jefe De Seguridad Y Salud Empresa Agroindustria
                              Laredo S.A.A.
                            </p>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                  <div class="swiper-pagination"></div>

                  <!-- If we need navigation buttons -->               
                  <div class="swiper-button-prev" id="prev-testi"></div>
                  <div class="swiper-button-next" id="next-testi"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- 
        - # NEW - SERVICE - DESEMPEÑO
      -->

      <section class="service respon">
        <div class="container">
          <!-- <p class="section-subtitle" id="about-label">Titulo</p> -->
          <h2 class="h2 section-title" style="margin-top: 50px;">Nuestro Desempeño</h2>
          <div class="slide-container swiper">
            <div class="slide-content" id="slide-desempeno">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay-desempeno"></span>

                            <div class="card-image-desempeno">
                                <img src="assets/images/desempeno/desem1.png" alt="desem1" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Más de 10 empresas usan Iteprevengo Software.</h2>
                            <!-- <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p> -->

                            <!-- <button class="button">View More</button> -->
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay-desempeno"></span>

                            <div class="card-image-desempeno">
                                <img src="assets/images/desempeno/desem2.png" alt="desem2" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Más de 20,000 usuarios acceden e interactúan.</h2>
                            <!-- <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button> -->
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay-desempeno"></span>

                            <div class="card-image-desempeno">
                                <img src="assets/images/desempeno/desem3.png" alt="desem3" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Más de 5 años de actualizacion contínua y personalizada.</h2>
                            <!-- <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button> -->
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay-desempeno"></span>

                            <div class="card-image-desempeno">
                                <img src="assets/images/desempeno/desem4.png" alt="desem" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Nuestros módulos se adecúan a tu gestión.</h2>
                            <!-- <p class="description">Thedipisicing elit.</p> -->
                            <br>
                            <!-- <button class="button">View More</button> -->
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn" id="next-desem"></div>
            <div class="swiper-button-prev swiper-navBtn" id="prev-desem"></div>
            <div class="swiper-pagination" id="pagDesempeno"></div>
          </div>
        </div>
      </section>

      <!-- AHORA VENTAJAS -->

      <!-- 
        - # NEW - SERVICE - VENTAJAS
      -->
      <section class="service respon">
        <div class="container">
          <!-- <p class="section-subtitle" id="about-label">Titulo</p> -->
          <h2 class="h2 section-title" style="margin-top: 50px;">VENTAJAS DE USAR ITEPREVENGO SOFTWARE</h2>
          <div class="slide-container swiper">
            <div class="slide-content" id="slide-ventajas">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay-ventajas"></span>

                            <div class="card-image-ventajas">
                                <img src="assets/images/ventajas/ventaja1.png" alt="ventaja1" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Reduce costos (Papel, personas y tiempo).</h2>       
                            <br><!-- Linea de espacio -->
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay-ventajas"></span>

                            <div class="card-image-ventajas">
                                <img src="assets/images/ventajas/ventaja2.png" alt="ventaja2" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Promueve la participacíon de líderes y colaboradores.</h2>
                           
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay-ventajas"></span>

                            <div class="card-image-ventajas">
                                <img src="assets/images/ventajas/ventaja3.png" alt="ventaja3" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Tu información segura.</h2>
                            
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay-ventajas"></span>

                            <div class="card-image-ventajas">
                                <img src="assets/images/ventajas/ventaja4.png" alt="ventaja4" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Planifica tu gestión SST.</h2>
                            
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay-ventajas"></span>

                            <div class="card-image-ventajas">
                                <img src="assets/images/ventajas/ventaja5.png" alt="ventaja5" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Información actualizada y en línea.</h2>
                            
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay-ventajas"></span>

                            <div class="card-image-ventajas">
                                <img src="assets/images/ventajas/ventaja6.png" alt="ventaja6" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Prevé accidentes de trabajo y sanciones legales.</h2>
                            
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn" id="next-ventaja"></div>
            <div class="swiper-button-prev swiper-navBtn" id="prev-ventaja"></div>
            <div class="swiper-pagination" id="pagVentajas"></div>
          </div>
        </div>
      </section>

      <!-- UN SECTION PARA LOS CLIENTES - SOFTWARE -->
      <section class="service respon">
        <div class="container">
          <!-- <p class="section-subtitle" id="about-label">Titulo</p> -->
          <h2 class="h2 section-title" style="margin-top: 50px;">CLIENTES QUE USAN Y CONFÍAN EN NUESTRO SOFTWARE</h2>
          <div class="slide-container swiper">
            <div class="slide-content" id="slide-clientes">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">

                            <div class="card-image-cliente">
                                <img src="assets/images/clientes-software/cliente1.png" alt="cliente-sof1" class="card-img">
                            </div>
                        </div>

                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">

                            <div class="card-image-cliente">
                                <img src="assets/images/clientes-software/cliente2.png" alt="cliente-sof2" class="card-img">
                            </div>
                        </div>

                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">

                            <div class="card-image-cliente">
                                <img src="assets/images/clientes-software/cliente3.png" alt="cliente-sof3" class="card-img">
                            </div>
                        </div>

                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">

                            <div class="card-image-cliente">
                                <img src="assets/images/clientes-software/cliente4.png" alt="cliente-sof4" class="card-img">
                            </div>
                        </div>

                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">

                            <div class="card-image-cliente">
                                <img src="assets/images/clientes-software/cliente5.png" alt="cliente-sof5" class="card-img">
                            </div>
                           
                        </div>

                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">

                            <div class="card-image-cliente">
                                <img src="assets/images/clientes-software/cliente6.png" alt="cliente-sof6" class="card-img">
                            </div>
                        </div>
                        
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">

                            <div class="card-image-cliente">
                                <img src="assets/images/clientes-software/cliente7.png" alt="cliente-sof7" class="card-img">
                            </div>
                        </div>
                        
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">

                            <div class="card-image-cliente">
                                <img src="assets/images/clientes-software/cliente8.png" alt="cliente-sof8" class="card-img">
                            </div>
                        </div>
                        
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">

                            <div class="card-image-cliente">
                                <img src="assets/images/clientes-software/cliente9.png" alt="cliente-sof9" class="card-img">
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn" id="next-cliente"></div>
            <div class="swiper-button-prev swiper-navBtn" id="prev-cliente"></div>
            <!-- <div class="swiper-pagination" id="pagCliente"></div> -->
          </div>
        </div>
      </section>

      <!-- UN SECTION PARA LOS CLIENTES _ MARCAS -->
      <!-- <section class="service respon">

        <div class="container">
          <h2 class="h2 section-title" style="margin-top: 50px;">CLIENTES QUE USAN Y CONFÍAN EN NUESTRO SOFTWARE</h2>

          <div class="carrusel">
            <div class="carrusel-items">
              <div class="carrusel-item">
                <img src="./assets/images/clientes/abb.jpg" alt="abb" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/british-american-tobacco.jpg" alt="british-american-tobacco" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/claro.jpg" alt="claro" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/confitrol.jpg" alt="confitrol" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/fisac.jpg" alt="fisac" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/gerdau.jpg" alt="gerdau" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/grupoefe.jpg" alt="grupoefe" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/hidrandina.jpg" alt="hidrandina" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/hochschild.jpg" alt="hochschild" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/liderman.jpg" alt="liderman" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/nexa.jpg" alt="nexa" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/pacasmayo.jpg" alt="pacasmayo" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/pacifico.jpg" alt="pacifico" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/petroperu.jpg" alt="petroperu" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/preciouno.jpg" alt="preciouno" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/quikrete.jpg" alt="quikrete" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/reyser.jpg" alt="reyser" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/saeg.jpg" alt="saeg" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/siderperu.jpg" alt="siderperu" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/skf.jpg" alt="skf" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/ssk.jpg" alt="ssk" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/tottus.jpg" alt="tottus" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/villa-salud.jpg" alt="villa-salud" />
              </div>
              <div class="carrusel-item">
                <img src="./assets/images/clientes/willis.jpg" alt="willis" />
              </div>
            </div>
          </div>
        </div>
      </section> -->

      <!-- 
        - #PREGUNTAS FRECUENTES
      -->
      <section class="service respon">
        <div class="container">
          <h2 class="h2 section-title" style="margin-top: 50px;">Preguntas Frecuentes</h2>

          <div class="accordion">
            <div class="accordion-item">
              <div class="accordion-item-header">
                ¿Mis colaboradores pueden acceder al software?
              </div>
              <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                  Sí, de acuerdo al plan que elijas, usted brindará el acceso a sus colaboradores de forma rápida y sencilla.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <div class="accordion-item-header">
                ¿Cómo protegen la información registrada en ItePrevengo?
              </div>
              <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                  La información sensible se registra como: contraseñas, datos personales, inspecciones, accidentes, etc. Asimismo, nuestro software se somete a auditorías de ethical hacking por especialistas en seguridad de información.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <div class="accordion-item-header">
                Culminado el servicio, ¿Qué pasa con mi información?
              </div>
              <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                  Toda la información registrada podrás descárgala tú mismo y si necesitas ayuda te guiamos en el proceso. Luego de esto, toda la información será eliminada de nuestro servidor para garantizar la seguridad.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <div class="accordion-item-header">
                ¿Se pueden personalizar los módulos de acuerdo a mis necesidades?
              </div>
              <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                  Sí, contamos con un plan específico que permite personalizar el software a tu medida y si necesitas otros módulos, lo desarrollamos a tu medida.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <div class="accordion-item-header">
                ¿Cuál es el tiempo mínimo de contrato del servicio?
              </div>
              <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                  El tiempo mínimo es de 6 meses.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <div class="accordion-item-header">
                ¿Qué soporte de seguridad y salud en el trabajo brindan?
              </div>
              <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                  Te asesoramos en la implementación del software de acuerdo a tu gestión de seguridad y salud en el trabajo. Si es que todavía no tienes una gestión, te asesoramos en cómo implementarlo.
                </div>
              </div>
            </div>

          </div>

        </div>
      </section>

      <!-- 
        - # NEW - SERVICE - TECNOLOGIA
      -->

      <section class="service respon">
        <div class="container">
          <!-- <p class="section-subtitle" id="about-label">Titulo</p> -->
          <h2 class="h2 section-title" style="margin-top: 50px;">NUESTRA TECNOLOGÍA</h2>
          <div class="slide-container swiper">
            <div class="slide-content" id="slide-tecnologia">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay-tecnologia"></span>

                            <div class="card-image-tecnologia">
                                <img src="assets/images/tecnologia/tec1.png" alt="tec1" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Plataforma web siempre actualizada.</h2>       
                            <br><!-- Linea de espacio -->
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay-tecnologia"></span>

                            <div class="card-image-tecnologia">
                                <img src="assets/images/tecnologia/tec2.png" alt="tec2" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Nuestros servidores dedicados aseguran tu información.</h2>
                           
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay-tecnologia"></span>

                            <div class="card-image-tecnologia">
                                <img src="assets/images/tecnologia/tec3.png" alt="tec3" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Soporte oportuno 24 x 7.</h2>
                            
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay-tecnologia"></span>

                            <div class="card-image-tecnologia">
                                <img src="assets/images/tecnologia/tec4.png" alt="tec4" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Accesos seguros y confidenciales.</h2>
                            
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay-tecnologia"></span>

                            <div class="card-image-tecnologia">
                                <img src="assets/images/tecnologia/tec5.png" alt="tec5" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Los datos e información generada, son de tu propiedad, puedes importarlos o exportarlos.</h2>
                            
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay-tecnologia"></span>

                            <div class="card-image-tecnologia">
                                <img src="assets/images/tecnologia/tec6.png" alt="tec6" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Mejoras a tu medida.</h2>
                            
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn" id="next-tecnologia"></div>
            <div class="swiper-button-prev swiper-navBtn" id="prev-tecnologia"></div>
            <div class="swiper-pagination" id="pagTecnologia"></div>
          </div>
        </div>
        <center>
          <button class="agendar-demo btnfinal">
            <a href="https://landing-comitesst.iteprevengo.com/contacto-cita.php" class="btn btn-primary" target="_blank">Agendar una demo</a>
          </button>
        </center>
      </section>

      <!-- 
        - #CTA - BANNER ITEPREVENGO
      -->

      <!-- <section class="cta" aria-label="call to action">
        <div class="container">

          <h2 class="h2 section-title">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, ipsum!.
          </h2>

          <a href="#" class="btn btn-primary">Button</a>

        </div>
      </section> -->
    </article>
  </main>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container grid-list">
      <div class="footer-brand">
        <a href="https://www.linkedin.com/company/iteprevengo/" class="logo" target="_blank">
          <img src="./assets/images/logo-iteprevengo.png" width="300" height="24" alt="ItePrevengo" />
        </a>

        <p class="footer-text">
          &copy; 2023 ItePrevengo. <br />
          All rights reserved.
        </p>

        <ul class="social-list">
          <li>
            <a href="https://www.linkedin.com/company/iteprevengo/" class="social-link" target="_blank">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.facebook.com/ItePrevengo" class="social-link" target="_blank">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.iteprevengo.com/" class="social-link" target="_blank">
              <ion-icon name="logo-dribbble"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://wa.me/51943776124" class="social-link" target="_blank">
              <ion-icon name="logo-whatsapp"></ion-icon>
            </a>
          </li>

          <li>
            <a href="mailto:consultas@iteprevengo.com" class="social-link" target="_blank">
              <ion-icon name="mail-outline"></ion-icon>
            </a>
          </li>
        </ul>
      </div>

      <ul class="footer-list">
        <li>
          <p class="h4 footer-list-title">Hablemos</p>
        </li>

        <li>
          <a href="mailto:consultas@iteprevengo.com" class="footer-link">consultas@iteprevengo.com</a>
        </li>

        <li>
          <a href="tel:014800947" class="footer-link"> (01) 480 0947</a>
        </li>
        <li>
          <a href="tel:+51943776124" class="footer-link"> +51 943 776 124</a>
        </li>
      </ul>

      <ul class="footer-list">
        <li>
          <p class="h4 footer-list-title">Empresa</p>
        </li>

        <li>
          <a href="https://www.iteprevengo.com/quienes-somos/" class="footer-link" target="_blank">Quiénes Somos</a>
        </li>

        <li>
          <a href="https://www.iteprevengo.com/terminos-y-condiciones/" class="footer-link" target="_blank">Términos y Condiciones</a>
        </li>

        <li>
          <a href="https://www.iteprevengo.com/politicas-de-privacidad/" class="footer-link" target="_blank">Politicas de Privacidad</a>
        </li>
      </ul>

      <div class="footer-list">
        <p class="h4 footer-list-title">Propósito</p>

        <p class="footer-text">
          Nuestro propósito es ayudarte a reducir a cero los accidentes y
          enfermedades producidas en el trabajo, usando herramientas digitales
          para sus servicios de capacitación, consultoría, supervisión,
          monitoreos ocupacionales e implementación de la gestión de Seguridad
          y Salud en el Trabajo
        </p>
      </div>
    </div>
  </footer>

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>
  <script src="./assets/js/main.js"></script>
  <!-- sweetalert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="./assets/js/validacion.js"></script>
  <script src="./assets/js/alertify.min.js"></script>

  <!-- 
    - ionicon
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- 
    - Swiper
    -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <script>
    const swiperModulos = new Swiper("#slide-Modulos", {
      slidesPerView: 3,
      spaceBetween: 25,
      loop: true,
      centerSlide: 'true',
      fade: 'true',
      grabCursor: 'true',
      pagination: {
        el: ".pag",
        clickable: true,
        dynamicBullets: true,
      },
      navigation: {
        nextEl: "#next-modulo",
        prevEl: "#prev-modulo",
      },

      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        520: {
          slidesPerView: 2,
        },
        950: {
          slidesPerView: 3,
        },
      },
    });
  </script>

  <script>
    const swiperTestimonio = new Swiper(".swiper-testimonio", {
      autoHeight: true,
      loop: true,

      // If we need pagination
      pagination: {
        el: ".swiper-pagination",
      },

      // Navigation arrows
      navigation: {
        nextEl: "#next-testi",
        prevEl: "#prev-testi",
      },
    });
  </script>
  <script>
      const swiperDesempeno = new Swiper("#slide-desempeno", {
      slidesPerView: 3,
      spaceBetween: 25,
      loop: true,
      centerSlide: 'true',
      fade: 'true',
      grabCursor: 'true',
      pagination: {
        el: "#pagDesempeno",
        clickable: true,
        dynamicBullets: true,
      },
      navigation: {
        nextEl: "#next-desem",
        prevEl: "#prev-desem",
      },

      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        520: {
          slidesPerView: 2,
        },
        950: {
          slidesPerView: 3,
        },
      },
    });
  </script>
  <script>
      const swiperVentajas = new Swiper("#slide-ventajas", {
      slidesPerView: 3,
      spaceBetween: 25,
      loop: true,
      centerSlide: 'true',
      fade: 'true',
      grabCursor: 'true',
      pagination: {
        el: "#pagVentajas",
        clickable: true,
        dynamicBullets: true,
      },
      navigation: {
        nextEl: "#next-ventaja",
        prevEl: "#prev-ventaja",
      },

      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        520: {
          slidesPerView: 2,
        },
        950: {
          slidesPerView: 3,
        },
      },
    });
  </script>
  <script>
      const swiperClientes = new Swiper("#slide-clientes", {
      slidesPerView: 4,
      spaceBetween: 25,
      loop: true,
      centerSlide: 'true',
      fade: 'true',
      grabCursor: 'true',
      pagination: {
        // el: "#pagCliente",
        clickable: true,
        dynamicBullets: true,
      },
      navigation: {
        nextEl: "#next-cliente",
        prevEl: "#prev-cliente",
      },
      autoplay: {
        delay: 2000,
        pauseOnMouseEnter: true,
        disableOnInteraction: false,
      },

      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        520: {
          slidesPerView: 2,
        },
        950: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 4,
        },
      },
    });
  </script>
  <script>
      const swiperTecnologia = new Swiper("#slide-tecnologia", {
      slidesPerView: 3,
      spaceBetween: 25,
      loop: true,
      centerSlide: 'true',
      fade: 'true',
      grabCursor: 'true',
      pagination: {
        el: "#pagTecnologia",
        clickable: true,
        dynamicBullets: true,
      },
      navigation: {
        nextEl: "#next-tecnologia",
        prevEl: "#prev-tecnologia",
      },

      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        520: {
          slidesPerView: 2,
        },
        950: {
          slidesPerView: 3,
        },
      },
    });
  </script>
  
</body>

</html>