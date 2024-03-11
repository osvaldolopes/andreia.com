<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Osvaldo Filho" />
    <title>Andreia Keri</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{ asset('assets/img/navbar-logo.gif') }}"
                    alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <!-- MENU -->
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#products">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="#compras">Comprar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#redes">Redes Sociais</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contato</a></li>
                    <li class="nav-item"><a class="nav-link">|</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-shopping-cart fa-1x"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- MASTHEAD -->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Bem vindo!</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#redes">Redes Sociais</a>
        </div>
    </header>

    <!--PRODUTOS PARA COMPRA-->
    <section class="page-section bg-light" id="products">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Produtos</h2>
                <h3 class="section-subheading text-muted">Produtos usados, o frete por conta do cliente.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!--BLUSAS-->
                    <div class="products-item">
                        <div class="products-link" data-bs-toggle="modal">
                            <a href="{{ route('products.blusas') }}">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-shopping-cart fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/products/1.jpg" alt="..." />
                            </a>
                        </div>
                        <div class="products-caption">
                            <div class="products-caption-heading">Blusas</div>
                            <div class="products-caption-subheading text-muted">
                                Cropped, Camisas, Camisetas, Regatas.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!--BLAZERS-->
                    <div class="products-item">
                        <div class="products-link" data-bs-toggle="modal">
                            <a href="{{ route('products.blazers') }}">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-shopping-cart fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/products/2.jpg" alt="..." />
                            </a>
                        </div>
                        <div class="products-caption">
                            <div class="products-caption-heading">Blazers</div>
                            <div class="products-caption-subheading text-muted">
                                Casacos, Jaquetas, Sueters, Cardigans.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!--BOLSAS-->
                    <div class="products-item">
                        <div class="products-link" data-bs-toggle="modal">
                            <a href="{{ route('products.bolsas') }}">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-shopping-cart fa-3x"></i>
                                    </div>
                                </div>
                                <img class="img-fluid" src="assets/img/products/3.jpg" alt="..." />
                            </a>
                        </div>
                        <div class="products-caption">
                            <div class="products-caption-heading">Bolsas</div>
                            <div class="products-caption-subheading text-muted">
                                Clutch.
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!--CALÇAS-->
                    <div class="products-item">
                        <div class="products-link" data-bs-toggle="modal">
                            <a href="{{ route('products.calcas') }}">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-shopping-cart fa-3x"></i>
                                    </div>
                                </div>
                                <img class="img-fluid" src="assets/img/products/4.jpg" alt="..." />
                            </a>
                        </div>
                        <div class="products-caption">
                            <div class="products-caption-heading">Calças</div>
                            <div class="products-caption-subheading text-muted">
                                Shorts, Bermudas.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!--VESTIDOS-->
                    <div class="products-item">
                        <div class="products-link" data-bs-toggle="modal">
                            <a href="{{ route('products.vestidos') }}">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-shopping-cart fa-3x"></i>
                                    </div>
                                </div>
                                <img class="img-fluid" src="assets/img/products/5.jpg" alt="..." />
                            </a>
                        </div>
                        <div class="products-caption">
                            <div class="products-caption-heading">Vestidos</div>
                            <div class="products-caption-subheading text-muted">
                                Saias, Mini saias.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!--ACADEMIA-->
                    <div class="products-item">
                        <div class="products-link" data-bs-toggle="modal">
                            <a href="{{ route('products.academia') }}">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-shopping-cart fa-3x"></i>
                                    </div>
                                </div>
                                <img class="img-fluid" src="assets/img/products/6.jpg" alt="..." />
                            </a>
                        </div>
                        <div class="products-caption">
                            <div class="products-caption-heading">Academia</div>
                            <div class="products-caption-subheading text-muted">
                                Moletom, Legs.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Serviços</h2>
                <h3 class="section-subheading text-muted">Alguns links de outras loja em que sou parceira.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <a target="_blank" href="https://www.cea.com.br/"><i
                                class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-users fa-stack-1x fa-inverse"></i></a>
                    </span>
                    <h4 class="my-3">C&A</h4>
                    <p class="text-muted">Com a C&A você pode fazer as suas compras e garantir 10% de desconto
                        inserindo
                        <b>ANDREIAKERI</b> no campo parceira.
                    </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <a target="_blank" href="https://www.lojasrenner.com.br/"><i
                                class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-users fa-stack-1x fa-inverse"></i></a>
                    </span>
                    <h4 class="my-3">RENNER</h4>
                    <p class="text-muted">Com a RENNER você pode fazer as suas compras e garantir 10% de desconto
                        inserindo
                        <b>INFLU</b> no campo parceira.
                    </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <a target="_blank" href="https://rchlo.love/andreiakeri"><i
                                class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-users fa-stack-1x fa-inverse"></i></a>
                    </span>
                    <h4 class="my-3">RIACHUELO</h4>
                    <p class="text-muted">Com a RIACHUELO você pode fazer as suas compras e garantir 10% de desconto
                        inserindo
                        <b>RCHLO320563AFL</b> no campo parceira.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- COMO COMPRAR OS PRODUTOS-->
    <section class="page-section" id="compras">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Como Comprar</h2>
                <h3 class="section-subheading text-muted">Como pagar o produto no site?</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2009-2011</h4>
                            <h4 class="subheading">Our Humble Beginnings</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>March 2011</h4>
                            <h4 class="subheading">An Agency is Born</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>December 2015</h4>
                            <h4 class="subheading">Transition to Full Service</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>July 2020</h4>
                            <h4 class="subheading">Phase Two Expansion</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Aguarde
                            <br />
                            o seu
                            <br />
                            Produto!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--MINHAS REDES SOCIAIS-->
    <section class="page-section bg-light" id="redes">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Minhas Redes Sociais</h2>
                <h3 class="section-subheading text-muted">Faça parte das minhas redes sociais.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="rede-member">
                        <img class="mx-auto rounded-circle" src="assets/img/rede/1.jpg" alt="..." />
                        <h4>Instagram</h4>
                        <p class="text-muted">instagram.com/andreiakeri</p>
                        <a class="btn btn-dark btn-social mx-2" target="_blank" rel="noopener noreferrer"
                            href="https://www.instagram.com/andreiakeri/"
                            aria-label="Parveen Anand Twitter Profile"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="rede-member">
                        <img class="mx-auto rounded-circle" src="assets/img/rede/2.jpg" alt="..." />
                        <h4>Facebook</h4>
                        <p class="text-muted">facebook.com/andreia.borgeskeri</p>
                        <a class="btn btn-dark btn-social mx-2" target="_blank" rel="noopener noreferrer"
                            href="https://www.facebook.com/andreia.borgeskeri"
                            aria-label="Diana Petersen Twitter Profile"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="rede-member">
                        <img class="mx-auto rounded-circle" src="assets/img/rede/3.jpg" alt="..." />
                        <h4>You tube</h4>
                        <p class="text-muted">youtube.com/andreiakeri</p>
                        <a class="btn btn-dark btn-social mx-2" target="_blank" rel="noopener noreferrer"
                            href="https://www.youtube.com/andreiakeri" aria-label="Larry Parker Twitter Profile"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                            eaque,
                            laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                    </div>
                </div>
            </div>
    </section>

    <!--CONTATO DIRECIONADO PARA O EMAIL-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contato</h2>
                <h3 class="section-subheading text-muted">Envie sua sugestão ou duvida que reponderei o mais breve
                    possivel.</h3>
            </div>
            <form id="contactForm" action="#contact" method="get">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Seu Nome *"
                                data-sb-validations="required" />
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Seu Email *"
                                data-sb-validations="required,email" />
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Seu Celular *"
                                data-sb-validations="required" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Sua Mensagem *" data-sb-validations="required"></textarea>
                        </div>
                    </div>
                </div>>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton"
                        type="submit">Enviar</button></div>
            </form>
        </div>
    </section>

    <!--FOOTER-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; andreiakeri.com.br 2022</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" target="_blank" rel="noopener noreferrer"
                        href="https://www.youtube.com/andreiakeri" aria-label="You Tube"><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" rel="noopener noreferrer"
                        href="https://www.facebook.com/andreia.borgeskeri" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" rel="noopener noreferrer"
                        href="https://www.instagram.com/andreiakeri/" aria-label="Instagram"><i
                            class="fab fa-instagram"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="{{ route('privacy.policy') }}"><i class="fas fa-lock"></i> Termos
                        de Privacidade</a>

                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                            Osvaldo Filho                                * *-->
    <!-- * *               site de compra online de produtos usados                  * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
</body>

</html>
