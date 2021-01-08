<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Contato</title>

        <!--Bootstrap-->
        <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" />
        <!--Plugins-->
        <link rel="stylesheet" href="plugins/icomoon/icomoon.css" />
        <!--CSS-->
        <link rel="stylesheet" href="css/contato.css" />

    </head>

    <body>

        <header class="container">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/img-1.png" alt="Primeiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/img-2.png" alt="Segundo Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/img-3.png" alt="Terceiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/img-4.png" alt="Quarto Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/img-5.png" alt="Quinto Slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>


            <nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark mt-">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Redes Sociais
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item reg-facebook2" href="https://pt-br.facebook.com/">  Facebook</a>
                                <a class="dropdown-item reg-twitter" href="https://twitter.com/login?lang=pt">  Twitter</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item reg-linkedin" href="https://www.linkedin.com/">  LinkedIn</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Desativado</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>
                </div>
            </nav>

            <!--Fim-->


        </header>

        <div class="container borda p-3 mt-3">
            <form action="">
                <h1 class="text-center">Contato</h1>

                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nome</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Telefone</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">E-mail</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Mensagem</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>


                                </div>
                            </div>


                        </div>

                        <div class="form-group">
                            <button href="" class="btn btn-outline-danger btn-block">Enviar</button>
                        </div>

                    </div>



                    <div class="col">
                        <img  class="img-fluid" src="https://placehold.it/400X400" alt="" />
                    </div>




                </div>






            </form>

        </div>

        <footer>


        </footer>

        <!--Scripts JS-->
        <!--JQuery-->
        <script src="js/jquery-3.5.1.min.js"></script>


        <script src="plugins/bootstrap/js/bootstrap.min.js"></script>



    </body>
</html>