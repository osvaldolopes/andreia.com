@extends('layouts.default')
@section('content')
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
                            <a href="products">
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
                            <a href="products">
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
                            <a href="products">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-shopping-cart fa-3x"></i></div>
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
                            <a href="products">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-shopping-cart fa-3x"></i></div>
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
                            <a href="products">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-shopping-cart fa-3x"></i></div>
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
                            <a href="#portfolioModal6">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fas fa-shopping-cart fa-3x"></i></div>
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
                    <p class="text-muted">Com a C&A você pode fazer as suas compras e garantir 10% de desconto inserindo
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
                    <p class="text-muted">Com a RENNER você pode fazer as suas compras e garantir 10% de desconto inserindo
                        <b>ANDREIAKERI</b> no campo parceira.
                    </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <a target="_blank" href="https://shopee.com.br/lovito.br/"><i
                                class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-users fa-stack-1x fa-inverse"></i></a>
                    </span>
                    <h4 class="my-3">LOVITO</h4>
                    <p class="text-muted">Com a LOVITO você pode fazer as suas compras e garantir 10% de desconto inserindo
                        <b>ANDREIAKERI</b> no campo parceira.
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
                            href="https://www.instagram.com/andreiakeri/" aria-label="Parveen Anand Twitter Profile"><i
                                class="fab fa-instagram"></i></a>
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
                        <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque,
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
@endsection
