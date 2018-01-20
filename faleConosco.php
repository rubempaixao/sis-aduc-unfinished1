<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ADUC - Assembléia de Deus Unidade Cristã</title>
        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/styles_aduc3.css">
    </head>
    <body>
        <header>
            <div class="container">
                <a href="index.php"><img id="logotipo" src="img/logo/logo3.png" alt="Logotipo"></a>
<!--                <img id="logotipo" src="img/ConJovem_lg.png" alt="Logotipo">-->
            </div>
            <div class="header-top">
                <div class="container">
                    <ul class="pull-right">
                        <li>
                            <a href="https://www.facebook.com/aduc.unidadecrista" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/rubempx" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <nav id="menu" class="pull-right">
                        <ul>
                            <li><a href="index.php">Ínicio</a></li>
                            <li><a href="ministerios.php">Ministérios</a></li>
                            <li><a href="faleConosco.php">Contato</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://sis-aduc/index.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Galeria
                                    <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdown01">
                                    <a class="dropdown-item" href="fotos.php">Fotos</a>
                                    <a class="dropdown-item" href="videos.php">Vídeos</a>
                                    <a class="dropdown-item" href="galeria.php">YouTube</a>
                                </div>
                            </li>
                            <li class="search">
                                <div class="input-group">
                                    <input type="search" placeholder="Search" id="input-search">
                                  <span class="input-group-btn">
                                    <button class="" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                  </span>
                                </div><!-- /input-group -->
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <section>
            <div id="banner">
                <h4>UMAADUC<small>União de Mocidade e Adolescentes das Assembléias de Deus Unidade Cristã</small></h4>
            </div>
            
            <div id="faleConosco" class="container">
                <div class="row text-center">
                  <h2>Seja Bem-Vindo à ADUC</h2>
                    <hr>
                </div>
                <div class="row row-layout-padrao">
                    <p class="text-center">
                        Se você deseja conhecer melhor a ADUC, se batizar ou participar de nossas programações, preencha o formulário abaixo.
                        Nós iremos até você!
                    </p>
                </div>
            </div>
            
            <div id="form" class="container">
                <div class="row">
                    <form class="form-horizontal" method="POST" action="#">
                        <div layout:include="MensagemGeral"></div>
                        <div layout:include="MensagemErro"></div>

                        <div class="panel panel-default">
                                <div class="panel-heading">
                                        <div class="clearfix">
                                                <h1 class="panel-title aw-titulo-panel">Fale Conosco</h1>
                                                <a class="btn btn-click aw-link-panel" href="index.php">ADUC</a>
                                        </div>
                                </div>

                                <div class="panel-body">

                                    <div class="col-md-6">
                                        <div class="form-group">
        <!--					<label for="descricao" class="col-sm-4 control-label">*Nome</label>-->
                                                <div class="col-sm-offset-7 col-sm-6">
                                                        <input type="text" class="form-control" id="nome" placeholder="Nome"/>
                                                </div>
                                        </div>
                                        <div class="form-group">
        <!--					<label for="descricao" class="col-sm-4 control-label">*Email</label>-->
                                                <div class="col-sm-offset-7 col-sm-6">
                                                        <input type="text" class="form-control" id="email" placeholder="E-mail"/>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
        <!--					<label for="fone" class="col-sm-4 control-label">*Telefone</label>-->
                                                <div class="col-sm-offset-1 col-sm-6">
                                                    <input type="text" class="form-control" id="endereco" placeholder="Endereço"/>
                                                </div>
                                        </div>
                                        <div class="form-group">
        <!--					<label for="endereco" class="col-sm-4 control-label">*Endereço</label>-->
                                                <div class="col-sm-offset-1 col-sm-6">
                                                    <input type="text" class="form-control" id="fone" placeholder="Telefone"/>
                                                </div>
                                        </div>
                                    </div>
                                    
                                    
                                        <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-7">
                                                    <select class="form-control" id="assunto" placeholder="Assunto">
                                                        <option  selected="true">Sobre qual assunto precisa de informaçao?</option>
                                                        <option>Conhecer a ADUC</option>
                                                        <option>Batismo</option>
                                                        <option>Programação</option>
                                                        <option>Outros</option>
                                                    </select>
                                                </div>
                                        </div>
                                    
<!--                                        <div class="form-group">
        					<label for="assunto" class="col-sm-4 control-label">*Assunto</label>
                                                <div class="col-sm-offset-3 col-sm-7">
                                                    <input type="text" class="form-control" id="assunto" placeholder="Assunto"/>
                                                </div>
                                        </div>-->
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-7">
                                                <textarea class="form-control" id="mensagem" rows="5" placeholder="Fale conosco..."></textarea>
                                            </div> 
                                        </div>
                                    <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-10"><p>
                                            <button type="submit" class="btn btn-primary col-xs-offset-2">Enviar</button> |
                                            <a href="index.php" class="btn btn-danger col-xs-offset-0">Cancelar</a>
<!--                                        <button type="submit" class="btn btn-primary">Enviar</button> | -->
    <!--                                    <a href="index.php" class="btn btn-danger">Cancelar</a>-->
                                    </div> <!--col-sm-offset-2 -->
                                </div> <!--form-group -->
                                <div class="form-group">
                                    <div class="col-sm-offset-5 col-sm-10">
                                        <h6>(*) Todos os campos são de preenchimento obrigatório!</h6>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
<!--            <form class="form-horizontal container" method="POST" action="reclameAquiRecebe.php">
                <div class="panel panel-default">
                <legend class="legend-class">Posso ajudar?</legend>
                    <div class="form-group">
                        <label for="nome" class="col-sm-4 control-label">*Nome</label>
                        <div class="col-sm-4">
                            <input class="col-sm-10 form-control" type="text" name="nome"><p/>
                        </div> col-sm-4 
                    </div> form-group 
                    <div class="form-group">
                        <label for="email" class="col-sm-4 control-label">*E-mail</label>
                        <div class="col-sm-4">
                            <input class="col-sm-10 form-control" type="email" name="email" placeholder="exemplo@mail.com.br">
                        </div> col-sm-4 
                    </div> form-group 
                    <div class="form-group">
                        <label for="fone" class="col-sm-4 control-label">Telefone</label>
                        <div class="col-sm-4">
                            <input class="col-sm-10 form-control" type="text" name="fone">
                        </div> col-sm-4 
                    </div> form-group 
                    <div class="form-group">
                        <label for="assunto" class="col-sm-4 control-label">Assunto</label>
                        <div class="col-sm-4">
                            <input class="col-sm-10 form-control" type="text" name="assunto">
                        </div> col-sm-4 
                    </div> form-group 
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-4">
                            <textarea class="form-control" rows="4" placeholder="Fale conosco..."></textarea>
                        </div> col-sm-10 
                    </div> form-group 

                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-10"><p>
                            <button type="submit" class="btn btn-primary">Enviar</button> | 
                            <a href="index.php" class="btn btn-danger">Cancelar</a>
                        </div> col-sm-offset-2 
                    </div> form-group 
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-10">
                            <h6>Os campos marcados com (*) são obrigatórios</h6>
                        </div>
                    </div>
                </div> panel-default 
            </form>-->
            <div id="bannerInferior">
                <div class="row imagens">
<!--                    <div class="container">-->
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <img width="350" height="100" src="img/missoes.jpg">
                            </div>
                            <div class="col-md-3 text-center">
                                <img width="350" height="100" src="img/geracaoVida.jpg">
                            </div>
                            <div class="col-md-3 text-center">
                                <img width="350" height="100" src="img/EBD.jpg">
                            </div>
                            <div class="col-md-3 text-center">
                                <img width="330" height="100" src="img/santa-ceia.jpg">
                            </div>
                        </div>
<!--                    </div>-->
                </div>
            </div>
        </section>
        <footer>
            <div class="row row-cinza-claro">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 text-center">
                            <img id="logoRodape" src="img/logo/ConJovem_Frib.png" alt="Logotipo">
                        </div>
                        <div class="col-md-10">
                            <div class="col-md-4 endereco">
                                <h3>Endereço</h3>
                                <address>
                                    <i class="fa fa-map-marker"></i><span>Quadra 23 Lotes 26/27 Friburgo "B"<br/>
                                            Cidade Ocidental - GO</span>
                                </address>
                                <p><a href="tel:36259999"><i class="fa fa-phone"></i> 3625-9999</a></p>
                                <ul class="list-unstyled midias-sociais">
                                    <li>
                                        <a href="https://www.facebook.com/aduc.unidadecrista" target="_blank"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com/rubempx" target="_blank"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 mapa-site">
                                <h3>Mapa do site</h3>
                                <ul>
                                    <li>
                                        <a href="ministerios.php"><i class="fa fa-caret-right"></i>Ministérios</a>
                                    </li>
                                    <li>
                                        <a href="galeria.php"><i class="fa fa-caret-right"></i>Galeria</a>
                                    </li>
                                    <li>
                                        <a href="faleConosco.php"><i class="fa fa-caret-right"></i>Sou novo aqui</a>
                                    </li>
                                    <li>
                                        <a href="conJovem.php"><i class="fa fa-caret-right"></i>ConJovem</a>
                                    </li>
                                    <li>
                                        <a href="index.php"><i class="fa fa-caret-right"></i>Início</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-caret-right"></i>Topo</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-eventos">
                                <h3>Eventos</h3>
                                <ul>
                                    <li>
                                        <a href="umaaduc2017.php"><i class="fa fa-caret-right"></i> Congresso UMAADUC 2017</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-caret-right"></i> Congresso ConJovem 2017</a>
                                    </li>
                                    <li>
                                        <a href="faleConosco.php"><i class="fa fa-caret-right"></i> Congresso de Crianças 2017</a>
                                    </li>
                                    <li>
                                        <a href="conJovem.php"><i class="fa fa-caret-right"></i> Congresso de Missões 2017</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-caret-right"></i> Congresso de Senhoras 2018</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cinza-escuro">
                <div class="container">
                    <p class="pull-left">Copyright ConJovem 2017. Todos os direitos reservados</p>
                    <p class="pull-right text-roxo">Criado por Rubem Paixão</p>
                </div>
            </div>            
        </footer>
        
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/owl-carousel2/dist/owl.carousel.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/efeitos-aduc.js"></script>
    </body>
</html>

