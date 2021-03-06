<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('css/main.css')}}">
        <link href="{{ asset('/css/app.css')}}" rel="stylesheet">
        <script src="{{ asset(mix('js/app.js')) }}"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased" >

        <div class="container-fluid col-lg-12 init" >
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid ">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <a class="navbar-brand" href="#">
                            <img src="{{URL::asset('/img-logos/logo5.jpg')}}" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            Facturacion
                        </a>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                            <li class="nav-item ">
                                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#misionAncla">Vision Mision</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#politicaAncla" tabindex="-1" >Politica de calidad</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://factureya.blikon.com/CFDI33FP/Presentacion/Usuario/Ingreso.aspx">Facturacion electronica</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Servicios y contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="col-lg-10 col-auto secu">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{URL::asset('/img-c/AsesoriaContable.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="{{URL::asset('/img-c/declaracion_anual.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="{{URL::asset('/img-c/estados_financieros.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="{{URL::asset('/img-c/factura.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="{{URL::asset('/img-c/nomina.jpg')}}" class="d-block w-100" alt="...">
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


{{--Contenido base --}}
            <h1> Despacho Contable G??mez y Asociados</h1>
            <p>
                Somos un despacho fiscal y contable con una visi??n fresca e innovadora, un despacho s??lido preparado para dar soluciones a los problemas que enfrentan tanto personas f??sicas o morales.
                Con m??s de 10 a??os de experiencia en el ramo fiscal y contable y con la firme finalidad de proporcionar la mejor soluci??n, para cumplir con las nuevas obligaciones fiscales. Estamos comprometidos a proporcionar un mejor servicio de tal manera que agregue un valor a nuestros clientes.

            </p>
            {{--Mision and vision --}}
            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-white bg-dark rounded-3">
                        <h2 id="misionAncla">Mision</h2>
                        <p >Nuestra misi??n es ofrecer servicios de calidad y profesional en tiempo y forma, cumpliendo con el marco legal que exige el Servicio de Administraci??n Tributaria ??? SAT.
                            Para lograr nuestros objetivos contamos con los recursos tecnol??gicos de vanguardia y aplicando las mejores estrategias administrativas.
                        </p>
                        <button class="btn btn-outline-light" type="button">Example button</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>Vision</h2>
                        <p>Nuestra visi??n como despacho contable es, ser uno de los mejores despachos de contadores P??blicos en M??xico
                            de Calidad y mejora continua, facilitando el cumplimiento de obligaciones fiscales para las personas morales
                            y fiscas en el pa??s. Contamos con est??ndares de calidad y seguridad de la informaci??n.
                        </p>
                        <button class="btn btn-outline-secondary" type="button">Example button</button>
                    </div>
                </div>
            </div>


            {{--Politica --}}
            <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 fst-italic" id="politicaAncla">Pol??tica de calidad </h1>
                    <p class="lead my-3"> Despacho Contable G??mez y Asociados buscamos en todo momento mantener una sana relaci??n y con principios ??ticos y morales con todos nuestros clientes, para nosotros es de vital importancia satisfacer las necesidades de todos nuestros clientes con la mas alta calidad para cumplir con sus compromisos, as?? como estar al corriente con todas sus obligaciones fiscales requeridos por el Sistema de Administraci??n Tributaria, SAT.</p>
                </div>
            </div>
                {{--Items--}}
            <h1>Principios</h1>
            <div class="row">
            <div class="col-xl-2 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                <div class="position-relative">
                    <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
                    <p>Satisfacer las necesidades de nuestros clientes, de acuerdo a la ley fiscal. </p>
                </div>
            </div>
            <div class="col-xl-2 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                <div class="position-relative">
                    <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
                    <p>Estamos en constante actualizaci??n para ofrecerle un servicio de calidad.</p>
                </div>
            </div>
            <div class="col-xl-2 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                <div class="position-relative">
                    <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
                    <p>Comprometidos con el trabajo en equipo.</p>
                </div>
            </div>
            <div class="col-xl-2 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                <div class="position-relative">
                    <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
                    <p>Ofrecer servicios favorables con apego a resultados.</p>
                </div>
            </div>
            <div class="col-xl-2 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                <div class="position-relative">
                    <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
                    <p>Mejora continua.</p>
                </div>
            </div>
            </div>
        {{--Valores--}}

            <h1>Para alcanzar nuestros los objetivos, fomentamos valores como:</h1>
            <div class="row">

                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Honestidad</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Respeto</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Responsabilidad</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Calidad</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Compromiso</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

            </div>

            {{--Tipos de comprobantes start --}}

            <div class="text-center">
                <h1 class="h1">A trav??s de nuestro sistema en l??nea,
                    podr??s generar estos tipos de comprobantes (CFDI's):
                </h1>
            </div>
            <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-box orange">
                    <i class="ri-discuss-line icon"></i>
                    <h3>Facturas electr??nicas</h3>
                    <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                    <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Recibo de Honorarios</h3>
                        <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Recibos de Arrendamiento</h3>
                        <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box green">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Recibo de N??mina</h3>
                        <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-box red">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Recibo de Pago</h3>
                        <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-box purple">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Notas de Cr??ditos</h3>
                        <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="service-box pink">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Recibo de donativo</h3>
                        <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box green">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Cartas Porte</h3>
                        <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-box red">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Notas de Cr??dito</h3>
                        <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-box purple">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Formato para gasolineras</h3>
                        <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>
{{--End de a traves--}}

            <div class="text-center">
                <h1 class="h1">Adem??s
                </h1>
            </div>
            <div class="row">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Contamos con personal calificado y capacidad para llevarte de la mano y cumplir con tus obligaciones fiscales</li>
                    <li class="list-group-item">Proporcionamos asesor??a fiscal y financiera </li>
                    <li class="list-group-item">Brindamos asesor??a fiscal oportuna para cumplir fiscalmente en tiempo y forma.</li>
                    <li class="list-group-item">Brindamos asesor??a en presentaci??n de declaraciones. </li>
                </ul>

            </div>
            {{--Tipos de comprobantes end --}}


            {{--Paquetes --}}
            <div class="text-center">
                <h1 class="h1">Genera f??cilmente comprobantes fiscales digitales (CFDI's)
                    cumpliendo con las disposiciones vigentes del SAT
                </h1>
            </div>

                {{--seccion de planes --}}
            <section id="pricing" class="pricing">
            <div data-aos="fade-up">

            <header class="section-header">
                <h2>Pricing</h2>
                <p>Check our Pricing</p>
            </header>

            <div class="row gy-4" data-aos="fade-left">
                {{--Pla #1 --}}
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #07d5c0;">Plan 25</h3>
                        <div class="price"><sup>$</sup>490</div>
                        <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
                        <ul>
                            <li>Paquete de 25 cr??ditos</li>

                        </ul>
                        <a href="#" class="btn-buy">Solicitar una cotizaci??n</a>
                    </div>
                </div>
                {{--Pla #2 --}}
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #07d5c0;">Plan 50</h3>
                        <div class="price"><sup>$</sup>590</div>
                        <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
                        <ul>
                            <li>Paquete de 50 cr??ditos</li>

                        </ul>
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>
                {{--Pla #3 --}}
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #07d5c0;">Plan 100</h3>
                        <div class="price"><sup>$</sup>1080</div>
                        <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
                        <ul>
                            <li>Paquete de 100 cr??ditos</li>

                        </ul>
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>
                {{--Pla #4 --}}
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #07d5c0;">Plan 300</h3>
                        <div class="price"><sup>$</sup>1650</div>
                        <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
                        <ul>
                            <li>Paquete de 300 cr??ditos</li>

                        </ul>
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>
                {{--Pla #5 --}}
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #07d5c0;">Plan 500</h3>
                        <div class="price"><sup>$</sup>1950</div>
                        <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
                        <ul>
                            <li>Paquete de 500 cr??ditos</li>

                        </ul>
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>
                {{--Pla #6 --}}
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #07d5c0;">Plan 1000</h3>
                        <div class="price"><sup>$</sup>3150</div>
                        <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
                        <ul>
                            <li>Paquete de 1000 cr??ditos</li>

                        </ul>
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>
                {{--Pla #7 --}}
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #07d5c0;">Plan 2500</h3>
                        <div class="price"><sup>$</sup>6150</div>
                        <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
                        <ul>
                            <li>Paquete de 2500 cr??ditos</li>

                        </ul>
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>
                {{--Pla #8 --}}
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #07d5c0;">Plan 5000</h3>
                        <div class="price"><sup>$</sup>10650</div>
                        <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
                        <ul>
                            <li>Paquete de 5000 cr??ditos</li>

                        </ul>
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>
                {{--Pla #9 --}}
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #07d5c0;">Plan 10000</h3>
                        <div class="price"><sup>$</sup>18550</div>
                        <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
                        <ul>
                            <li>Paquete de 10000 cr??ditos</li>

                        </ul>
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>





            </div>
            </div>
            </section>
            {{--Termina seccion de planes --}}



            {{--Inicia modal de contacto--}}



            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Comun??cate con nosotros y nos pondremos en contacto contigo a la brevedad</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h6>Despacho contable G??mez y Asociados pone a tu disposici??n los siguientes servicios</h6>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                    Asesor??a contable y fiscal
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">Contabilidad electr??nica</a>
                                <a href="#" class="list-group-item list-group-item-action">Facturaci??n electr??nica versi??n 3.3 y versi??n 4.0</a>
                                <a href="#" class="list-group-item list-group-item-action">Asesor??a T??cnica y fiscal sobre la emisi??n del nuevo complemento Carta Porte</a>
                                <a href="#" class="list-group-item list-group-item-action" tabindex="-1" aria-disabled="true">Tramite Digitales ante las instituciones Gubernamentales:  SAT, IMSS, INFONAVIT, etc</a>
                                <a href="#" class="list-group-item list-group-item-action">C??lculo de impuestos</a>
                                <a href="#" class="list-group-item list-group-item-action">Asesor??a para el cumplimiento de obligaciones fiscales y legales</a>
                                <a href="#" class="list-group-item list-group-item-action">Elaboraci??n de Estados Financieros e Informaci??n Financiera</a>
                                <a href="#" class="list-group-item list-group-item-action">C??lculo de n??mina y 3% sobre n??mina</a>
                                <a href="#" class="list-group-item list-group-item-action">C??lculo de IMSS, SUA, SIPARE, e INFONAVIT</a>
                            </div>

                            {{--Starts of form --}}
                           <p> Informaci??n de contacto</p>
                            <p>Los campos marcados con * son obligatorios</p>
                            <form>
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" aria-describedby="Jose Hernandez">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="telefono" class="form-label">Telefono</label>
                                    <input type="number" class="form-control" id="telefono" aria-describedby="000 000 0000">
                                </div>
                                <div class="mb-3">
                                    <label for="mensaje" class="form-label">Mensaje</label>
                                    <input type="text" class="form-control" id="mensaje" aria-describedby="Quiero su producto!">
                                </div>

                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>




            {{--termina modal de contacto--}}




        </div>

            <footer class="footer mt-auto py-3 bg-light">
                <div class="container-fluid">
                    <div class="row">
                        <div class="row">
                            <div class="float-start" style="display: inline;">
                               <a href=""> -Pol??ticas de calidad-</a>
                                <img src="{{URL::asset('/img-logos/logo5.jpg')}}" alt="..." style="width: 150px; height:auto; display: inline;">
                            </div>
                            <div class="float-end" style="display: inline;">
                                <p>Cont??ctanos</p>
                                <p>EMAIL: contabilidad_gomez@outlook.com</p>
                                <p>TEL??FONOS: Puebla, Pue: 222 402 3341</p>
                                <p>Orizaba, Ver: 272 228 8012</p>
                            </div>


                        </div>



                        <div class="row">
                            <p class="text-center"> Despacho Contable G??mez y Asocias | Visi??n Fresca e Innovadora</p>

                        </div>
                    </div>
                </div>
            </footer>

            </div>
    </body>
</html>

