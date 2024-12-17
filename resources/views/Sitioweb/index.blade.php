<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('Sitioweb/css/style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <header>
        <div>
            <img class="logo" src="{{asset('Sitioweb/img/logo.png')}}" alt="">
        </div>
        <button  id="Abrir" class="abrir-menu"><i class="bi bi-list"></i>Abrir </button>
        <nav class="nav">
            <button id="Cerrar" class="cerrar-menu"><i class="bi bi-x-lg"></i> Cerrar</button>
            <ul class="nav-list" id="nav">
                <li class="ini"><a href="#"><i class="bi bi-house-door"></i> Inicio</a></li>
                <li><a href="#info"><i class="bi bi-phone-fill"></i> Contacto</a></li>
                <li><a href="#servicios"><i class="bi bi-person-arms-up"></i> Servicio</a></li>
            </ul>
       </nav>
    </header> <p>

    </p>

    <section id="main_parrafo_1">
        <h2>DRA. MARGARITA POZOS SALAS</h2>
        <p>Soy Abogada Ecuatoriana,domiciliada en el Distrito Metropolitano de Quito, con una sólida formación académica en la Universidad Central del Ecuador, donde obtuve los títulos de Doctora en Jurisprudencia y Licenciada en Ciencias Sociales. Mi experiencia profesional se centra en el área de Derecho Societario y Mercantil,Derecho de Familia, Materia Civil, Laboral, Transito,Notarial, con más de 15 años asesorando a clientes en Ecuador, Colombia y Perú. Actualmente, además de mi práctica legal, participo activamente en el sector empresarial como accionista de una empresa de turismo y en el ámbito social como miembro de una fundación.</p>
       
    </section>

    <main>
       

      <section>
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="img-carrusel" src="{{asset('Sitioweb/img/logo.png')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img class="img-carrusel" src="{{asset('Sitioweb/img/carr1.jpeg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img class="img-carrusel" src="{{asset('Sitioweb/img/carr2.jpeg')}}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </section>
        
         <div class="mis-vis">



            <section class="mision">
                <h4>MISION</h4>
                @foreach($getInicio as $getInicios)
                <P>{{$getInicios->mision}} </P>

                @endforeach
                
            </section>
            
            <section class="vision">
                <h4>VISION</h4>
                <P>La visión del  consorcio Jurídico  PAZOS&PAZOS ASOSCIADOS, es avanzar con ampliación de conocimientos, actualización de procesos y enfoque al crecimiento, a fin de brindar un servicio de calidad y eficiente a satisfacción de los clientes .</P>
                
            </section>
        </div>

        <div id="servicios" class="container">
            <h3 >Servicios</h3>
            <div class="flex-section"> <P>

            </P>
                
                <div class="Servicios">
                    <i class="bi bi-balloon-fill"></i>
                    <h3></h3>
                    <p> MATERIA CIVIL<p>
                    </p> FAMILIA<p>
                    </p> SOCIETARIO <P>   
                    </P>LABORAL</p>
                </div>

                <div class="Servicios">
                    <i class="bi bi-balloon-fill"></i>
                    <h3></h3>
                    <p>NOTARIAL <p>
                    </p>ADMINISTRATIVO <p>                       
                    </p> MARCAS & PATENTES <p>
                    </p> TRANSITO <P>
                    
               
                </div>
                <div class="Servicios">
                    <i class="bi bi-balloon-fill"></i>
                    <h3></h3>
                    <p> JUICIOS CIVILES <P>
                    </P> DIVORCIOS <P>
                    </P> ALIMENTOS <P>
                    </P> COSNTITUCION DE COMPAÑIAS <P>
                    </P> JUICIOS DE TRANSITO</p>
                </div>

            </div>
        </div>
        
    </main><br>
    
    <footer><hr>

    <div id="info" class="foot">

        <section class="Rd">
            <h4 class="lineas"> <i class="bi bi-tv"></i> REDES SOCIALES </h4>
            <ul>
                <li><a target="_blank" href="https://www.facebook.com/share/15gsq9XoFa/"> <i class="bi bi-facebook"></i> Facebook</a></li>
                <li><a target="_blank" href=" https://www.linkedin.com/in/margarita-pazos-480443194?"><i  class="bi bi-linkedin"></i> LinkeDin</a></li>
                <li><a target="_blank" href="utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"> <i class="bi bi-instagram"></i> Instagram</a></li>
            </ul>
        </section>
        
        
        <section class="contacto">
            <h4><i class="bi bi-person"></i> CONTACTO</h4>
            
            <li><a target="_blank" href="https://web.whatsapp.com/"><i class="bi bi-whatsapp"></i> Contacto</a></li>
            
        </section>
        
        <section class="ubi">
            <h4> <i class="bi bi-geo"></i>  Ubicacion </h4>
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3989.7905799881664!2d-78.50305052503545!3d-0.2136570997842378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1ses!2sec!4v1734451369016!5m2!1ses!2sec" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </div>

    <div class="pie ">
        <p>&copy; Todos los derechos Reservados </p>
    </div>
   
</footer>
    <script src="/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>