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
    <link href="../public/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.gif" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <!-- MENU -->
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#products">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="#compras">Como Comprar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#redes">Redes Sociais</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contato</a></li>
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

    @yield('content')

    <!--FOOTER-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; andreiakeri.com.br 2022</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/andreiakeri" aria-label="You Tube"><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/andreia.borgeskeri" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/andreiakeri/" aria-label="Instagram"><i
                            class="fab fa-instagram"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="privacy"><i class="fas fa-lock"></i> Termos de Privacidade</a>
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../public/js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                            Osvaldo Filho                                * *-->
    <!-- * *               site de compra online de produtos usados                  * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
</body>
</html>
