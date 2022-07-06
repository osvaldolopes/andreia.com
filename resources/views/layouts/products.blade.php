@extends('layouts.default')
@section('content')
    <!--PRODUTOS PARA COMPRA POR TIPO-->
    <section class="page-section bg-light" id="products">
        <div class="container">
            <div class="text-center">                   
                    <h2 class="section-heading text-uppercase"> {{ $prod->category }}</h2> 
                <h3 class="section-subheading text-muted">Produtos usados, o frete por conta do cliente.</h3>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!--PRODUTOS-->
                        <div class="products-item">
                            <a class="products-link" data-bs-toggle="modal" href="#productsModal{{ $loop->iteration }}">
                                <div class="products-hover">
                                    <div class="products-hover-content"><i class="fab fa-sistrix fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ $product->cover }}" alt="Imagem do produto" />
                            </a>
                            <div class="products-caption">
                                <div class="products-caption-heading">R$ {{ $product->price }}</div>
                                <div class="products-caption-subheading text-muted">
                                    {{ $product->name }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--LISTA DE PRODUTOS-->
                    <div class="products-modal modal fade" id="productsModal{{ $loop->iteration }}" tabindex="-1"
                        role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg"
                                        alt="Close modal" />
                                </div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="modal-body">
                                                <!-- Project details-->
                                                <h2 class="text-uppercase"> {{ $product->name }}</h2>
                                                <p class="item-intro text-muted">R$ {{ $product->price }}</p>
                                                <img class="img-fluid d-block mx-auto" src="{{ $product->cover }}"
                                                    alt="Imagem do produto" />
                                                <p> {{ $product->description }} </p>
                                                <ul class="list-inline">
                                                    <li>
                                                        <strong>Estoque:</strong>
                                                        {{ $product->stock }}
                                                    </li>
                                                    <li>
                                                        <strong>Category:</strong>
                                                        {{ $product->category }}
                                                    </li>
                                                </ul>
                                                <button class="btn btn-primary btn-xl text-uppercase"
                                                    data-bs-dismiss="modal" type="button">
                                                    <i class="fas fa-shopping-cart me-1"></i>
                                                    Comprar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
