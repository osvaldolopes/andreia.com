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
                    <!-- Product item 1-->
                    <div class="products-item">
                        <a class="products-link" data-bs-toggle="modal" href="#productsModal1">
                            <div class="products-hover">
                                <div class="products-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/1.jpg" alt="..." />
                        </a>
                        <div class="products-caption">
                            <div class="products-caption-heading">Threads</div>
                            <div class="products-caption-subheading text-muted">Illustration</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Product item 2-->
                    <div class="products-item">
                        <a class="products-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="products-hover">
                                <div class="products-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/2.jpg" alt="..." />
                        </a>
                        <div class="products-caption">
                            <div class="products-caption-heading">Explore</div>
                            <div class="products-caption-subheading text-muted">Graphic Design</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Product item 3-->
                    <div class="products-item">
                        <a class="products-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="products-hover">
                                <div class="products-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/3.jpg" alt="..." />
                        </a>
                        <div class="products-caption">
                            <div class="products-caption-heading">Finish</div>
                            <div class="products-caption-subheading text-muted">Identity</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Product item 4-->
                    <div class="products-item">
                        <a class="products-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="products-hover">
                                <div class="products-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/4.jpg" alt="..." />
                        </a>
                        <div class="products-caption">
                            <div class="products-caption-heading">Lines</div>
                            <div class="products-caption-subheading text-muted">Branding</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Product item 5-->
                    <div class="products-item">
                        <a class="products-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="products-hover">
                                <div class="products-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/5.jpg" alt="..." />
                        </a>
                        <div class="products-caption">
                            <div class="products-caption-heading">Southwest</div>
                            <div class="products-caption-subheading text-muted">Website Design</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Product item 6-->
                    <div class="products-item">
                        <a class="products-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="products-hover">
                                <div class="products-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/6.jpg" alt="..." />
                        </a>
                        <div class="products-caption">
                            <div class="products-caption-heading">Window</div>
                            <div class="products-caption-subheading text-muted">Photography</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--LISTA DE PRODUTOS-->
    <!-- Product item 1 modal popup-->
    <div class="products-modal modal fade" id="productsModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/1.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Threads
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Illustration
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product item 2 modal popup-->
    <div class="products-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/2.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Explore
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Graphic Design
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product item 3 modal popup-->
    <div class="products-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/3.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Finish
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Identity
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product item 4 modal popup-->
    <div class="products-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/4.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Lines
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Branding
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product item 5 modal popup-->
    <div class="products-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/5.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Southwest
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Website Design
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product item 6 modal popup-->
    <div class="products-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/6.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Window
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Photography
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <a target="_blank" href="https://www.cea.com.br/"><i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i></a>
                    </span>
                    <h4 class="my-3">C&A</h4>
                    <p class="text-muted">Com a C&A você pode fazer as suas compras e garantir 10% de desconto inserindo 
                        <b>ANDREIAKERI</b> no campo parceira.
                    </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <a target="_blank" href="https://www.lojasrenner.com.br/"><i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i></a>
                    </span>
                    <h4 class="my-3">RENNER</h4>
                    <p class="text-muted">Com a RENNER você pode fazer as suas compras e garantir 10% de desconto inserindo 
                        <b>ANDREIAKERI</b> no campo parceira.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <a target="_blank" href="https://shopee.com.br/lovito.br/"><i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i></a>
                    </span>
                    <h4 class="my-3">LOVITO</h4>
                    <p class="text-muted">Com a LOVITO você pode fazer as suas compras e garantir 10% de desconto inserindo 
                        <b>ANDREIAKERI</b> no campo parceira.</p>
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
                        <a class="btn btn-dark btn-social mx-2" target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/andreiakeri/" aria-label="Parveen Anand Twitter Profile"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="rede-member">
                        <img class="mx-auto rounded-circle" src="assets/img/rede/2.jpg" alt="..." />
                        <h4>Facebook</h4>
                        <p class="text-muted">facebook.com/andreia.borgeskeri</p>
                        <a class="btn btn-dark btn-social mx-2" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/andreia.borgeskeri" aria-label="Diana Petersen Twitter Profile"><i
                                class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="rede-member">
                        <img class="mx-auto rounded-circle" src="assets/img/rede/3.jpg" alt="..." />
                        <h4>You tube</h4>
                        <p class="text-muted">youtube.com/andreiakeri</p>
                        <a class="btn btn-dark btn-social mx-2" target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/andreiakeri" aria-label="Larry Parker Twitter Profile"><i
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
                <h3 class="section-subheading text-muted">Envie sua sugestão ou duvida que reponderei o mais breve possivel.</h3>
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
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase"
                        id="submitButton" type="submit">Enviar</button></div>
            </form>
        </div>
    </section>    
@endsection
