<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="../public/css/styles.css" rel="stylesheet" />
</head>

<body>
    <section id="contact">
        <form id="contactForm" action="dashboard" method="get">
            <div class="row h2">
                <p>PAINEL DE CONTROLE</p>
            </div><br>
            <div class="row">
                <div class="col"></div>
                <div class="col-lg-5">
                    <div class="form-group">
                        <!--EMAIL DO USUARIO CADASTRADO-->
                        <input class="form-control" id="email" type="email" placeholder="Seu Email"
                            data-sb-validations="required,email" />
                    </div>
                    <div class="form-group">
                        <!--SENHA DO USUARIO CADASTRADO-->
                        <input class="form-control" id="senha" type="password" placeholder="Senha"
                            data-sb-validations="required" />
                    </div>
                </div>
                <div class="col"></div>
            </div>
            <!-- Submit Button-->
            <div class="text-center">
                <button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Entrar</button>
            </div>
        </form>
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
                    <a class="link-dark text-decoration-none me-3" href="privacy"><i class="fas fa-lock"></i> Termos de
                        Privacidade</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
