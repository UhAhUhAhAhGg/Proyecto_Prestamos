<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prestamo-Equipos-UCB</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!-- Styles -->
       <style>
        body {
    background-color: #f4f4f4;
    font-family: "Arial", sans-serif;
}

.bg-custom {
    background-color: #0770BC !important;
}

.contact-link {
    font-size: 20px;
    text-decoration: none;
    color: rgba(255, 255, 255, 0.8);
    transition: all 0.3s ease;
}

.contact-link:hover {
    color: #fff;
    transform: translateX(15px);
    font-size: 22px;
}

button[type="submit"] {
    background-color: #ffc107;
    color: #333;
    padding: 12px 20px;
    font-size: 18px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

#loginForm,
#registerForm {
    background: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 30px;
    max-width: 700px;
    margin: 20px auto;
}

button[type="submit"]:hover {
    background-color: #e0a800;
}

@media (max-width: 768px) {
    #loginForm,
    #registerForm {
        padding: 20px;
        max-width: 90%;
    }

    button[type="submit"] {
        padding: 10px 15px;
        font-size: 16px;
    }
}

@media (max-width: 480px) {
    #loginForm,
    #registerForm {
        padding: 15px;
        max-width: 100%;
    }

    button[type="submit"] {
        width: 100%;
        padding: 12px;
    }
}

@media (max-width: 400px) {
    #loginForm,
    #registerForm {
        padding: 15px;
        max-width: calc(100% - 20px);
        margin: 10px;
    }

    button[type="submit"] {
        padding: 12px;
        font-size: 16px;
    }
}

.border-navigator {
    margin: 15px 10px;
    border-radius: 30px;
}
       </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-custom border-navigator">
                <div class="container-fluid">
                    <div class="d-flex justify-content-start">
                        <a class="navbar-brand" href="{{ url('/#') }}">
                            <img src="assets/images/ucb-banner.png" alt="Logo" style="height: 80px;">
                        </a>
                    </div>
                    @if (Route::has('login'))
                        <div class="d-flex justify-content-end">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-link" aria-current="page" href="index.html"><i class="bi bi-house-door-fill"></i> Inicio</a>
                                        <a class="nav-link" href="#"><i class="bi bi-envelope-fill"></i> Contacto</a>
                                        <a class="nav-link me-2" id="dashboardLink" href="../public/dashboard.html"><i class="bi bi-chat-right-fill"></i> Servicios</a>
                                        <a class="nav-link me-2" href="#"><i class="bi bi-info-circle-fill"></i> Acerca de Nosotros</a>
                                    <nav class="-mx-3 flex flex-1 justify-end">
                                        
                                        @auth
                                            <a  class="nav-link" aria-current="page"
                                                href="{{ url('/dashboard') }}"
                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                            >
                                            <i class="bi bi-house-door-fill"></i>
                                                Dashboard
                                            </a>
                                        @else
                                            <a class="btn btn-primary me-2" style="background-color: #feca0b; border: 2px black solid;color: black;"
                                                href="{{ route('login') }}"
                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                                Log in
                                            </a>
                    
                                            @if (Route::has('register'))
                                                <a class="btn btn-primary me-2" style="background-color: #feca0b; border: 2px black solid;color: black;"
                                                    href="{{ route('register') }}"
                                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                                    Register
                                                </a>
                                            @endif
                                        @endauth
                                    </nav>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    @endif
                </div>
                
            </nav>
            
        </header>

            
        <div class="container">
            <div id="pagina-de-inicio">
                <h1 class="display-1 text-center">Pagina de Inicio</h1>
                <br>
            </div>
        
            <section>
                <div class="container">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="assets/images/welcome3-img.png" class="d-block w-100" alt="Image 1">
                        </div>
                        <div class="carousel-item">
                          <img src="assets/images/objective-img.png" class="d-block w-100" alt="Image 2">
                        </div>
                        <div class="carousel-item">
                          <img src="assets/images/welcomeotroimg.png" class="d-block w-100" alt="Image 3">
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
                  </div>
                <hr>
            </section>
        
            <h1 style="text-align:center;">NUESTROS NUEVOS INSTRUMENTOS</h1>
            <!-- Sección de productos -->
            <section class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="assets/images/potenciometro.jpg" class="card-img-top" alt="Nombre del producto 1">
                        <div class="card-body">
                            <h5 class="card-title">Producto 1</h5>
                            <p class="card-text">El potenciómetro es un dispositivo electrónico utilizado para controlar el flujo de corriente eléctrica en un circuito.</p>
                            <button class="btn btn-primary" onclick="showDetails('Se recomienda usar con un voltaje no mayor a 5V, recomendar al usuario')">Ver detalles</button>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="assets/images/multimetro.webp" class="card-img-top" alt="Nombre del producto 2">
                        <div class="card-body">
                            <h5 class="card-title">Producto 2</h5>
                            <p class="card-text">El multímetro es una herramienta de medición eléctrica versátil que combina varias funciones en un solo dispositivo. Puede medir voltaje, corriente y resistencia</p>
                            <button class="btn btn-primary" onclick="showDetails('Este instrumento sólamente funciona con V110, recomendar al usuario')">Ver detalles</button>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="assets/images/frasco.jpg" class="card-img-top" alt="Nombre del producto 3">
                        <div class="card-body">
                            <h5 class="card-title">Producto 3</h5>
                            <p class="card-text">Los frascos de química son recipientes diseñados específicamente para contener y manipular productos químicos.</p>
                            <button class="btn btn-primary" onclick="showDetails('El material es bastante delicado, se recomienda sólamente proporcionar a docentes')">Ver detalles</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <footer class="bg-dark text-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3><i class="bi bi-person-circle"></i> Contacto:</h3>
                        <br>
                        <ul class="list-unstyled">
                            <li><a href="https://www.facebook.com/UCB.BOLIVIA/" class="contact-link"><i class="bi bi-facebook"></i> Página de Facebook</a></li>
                            <li><a href="https://www.instagram.com/ucb.lapaz/" class="contact-link"><i class="bi bi-instagram"></i> Página de Instagram</a></li>
                            <li><a href="https://twitter.com/UCBLaPaz" class="contact-link"><i class="bi bi-envelope"></i> Correo</a></li>
                            <li><a href="https://api.whatsapp.com/send/?phone=59177712334&text&type=phone_number&app_absent=0" class="contact-link"><i class="bi bi-whatsapp"></i> Whatsapp</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3><i class="bi bi-geo-alt-fill"></i> Dirección:</h3>
                        <ul class="list-unstyled">
                            <li>Calle 2 de Obrajes</li>
                            <br>
                            <li><img src="assets/images/image.png" alt="Ubicación" class="img-fluid"></li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <img src="assets/images/ucb-banner.png" alt="Imagen institucional" class="img-fluid mb-3">
                        <p>© 2024 Universidad Católica Boliviana. Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Bootstrap JS and dependencies -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
        <script>
            function showDetails(details) {
                var btn = event.target;
                var popover = new bootstrap.Popover(btn, {
                    content: details,
                    trigger: 'focus'
                });
                popover.show();
            }
        </script>
            
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
