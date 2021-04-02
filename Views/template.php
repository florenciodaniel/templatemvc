<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Loja MIX</title>
        <link rel="icon" href="favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="uma breve descrição do site, ex. desenvovimento web, sistemas, serviços de manutenção, ate 150 cracteres">
        <meta name="author" content="Stylusprime sistemas web">
        <!--    <meta name="keywords" content="palavras chaves ex. desenvolvimento, php, html, sistema,  programação">-->
        <meta name="robots" content="index,follow">
        <meta http-equiv="refresh" content="86400">
        <script src="<?php echo BASE_URL ?>assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <link href="<?php echo BASE_URL ?>assets/css/bootanime.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo BASE_URL ?>assets/css/boot.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo BASE_URL ?>assets/css/estilo.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
        <header id="header-topo" class="header-topo">
            <nav class="nav-topo">
                <ul class="ul-logo">
                    <li><a href="<?php echo BASE_URL ?>" onclick="menu()">LOJA MIX</a></li>
<!--                    <li> <a href="<?php echo BASE_URL; ?>" onclick="menu()"><img src="<?php echo BASE_URL; ?>assets/img/menu/logo_dimelux.png" alt=""/></a></li>-->

                </ul>

                <div id="menu_img">
                    <img id="img1" onclick="mostrar1()" alt="hindu" src="<?php echo BASE_URL ?>assets/img/menu/menu_fechado.png" alt="">
                    <img id="img2" onclick="mostrar2()" alt="hindu" src="<?php echo BASE_URL ?>assets/img/menu/menu_aberto.png" alt="" class="naoMostrar">
                </div>
                <ul id="ul-link" class="ul-link inativo">
                    <li><a href="<?php echo BASE_URL ?>home" onclick="menu()">Home</a></li>
                    <li><a href="<?php echo BASE_URL ?>#section1" onclick="menu()">Section 1</a></li>
                    <li><a href="<?php echo BASE_URL ?>#section2" onclick="menu()">Section 2</a></li>
                    <li><a href="<?php echo BASE_URL ?>produtos" onclick="menu()">Page 1</a></li>
                    <!--                    <li><a href="#contato" onclick="menu()">Contato</a></li>-->
                    <li><a href="<?php echo BASE_URL ?>home/destaques" onclick="menu()">Page 2</a></li>
                </ul>
            </nav>

        </header>
        <div class="conteudo">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </div>


        <!--      ----------------------RODAPE--------------------------------  -->
        <div class="rodape">
            <div class="rodape-container">
                <div class="links-rodape">
                    <a>Legislação</a>
                    <a>Trabalhe conosco</a>
                    <a>Devoluções</a>
                    <a>Comercial</a>
                    <a>Pendencias</a>
                </div>
                <div class="bandeiras">
                    <img src="<?php echo BASE_URL ?>assets/img/banvisa.png" alt=""/>
                    <img src="<?php echo BASE_URL ?>assets/img/banmaster.png" alt=""/>
                    <img src="<?php echo BASE_URL ?>assets/img/banamer.png" alt=""/>
                    <img src="<?php echo BASE_URL ?>assets/img/banelo.png" alt=""/>
                    <img src="<?php echo BASE_URL ?>assets/img/bannaosei.png" alt=""/>
                    <img src="<?php echo BASE_URL ?>assets/img/banhiper.png" alt=""/>
                    <img src="<?php echo BASE_URL ?>assets/img/banboleto.png" alt=""/>
                </div>
            </div>
            <div class="desenvolvedor">
                <a href="">Desenvolvido e organizado por <span>Stylusprime</span> Sistemas Web -Todos os direitos reservados</a>
            </div>
        </div>

        <script src="<?php echo BASE_URL ?>assets/js/cycle.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL ?>assets/js/bootanime.js" type="text/javascript"></script>


        <script>
                        //codigo que calcula o tamanho da tela
                        function sizeOfThings() {
                            var windowWidth = window.innerWidth;
                            var windowHeight = window.innerHeight;

                            var screenWidth = screen.width;
                            var screenHeight = screen.height;
                           //ajustando o tamnho do header conforme o tamanho da janela
                            document.getElementById('header-topo').style.width = windowWidth + 'px';

                        }
                        ;

                        sizeOfThings();

                        window.addEventListener('resize', function () {
                            sizeOfThings();
                        });
        </script>


        <script type="text/javascript">
            //codigo que faz sumir o menu em telas pequenas ao clicar em um link e tambem troca o backgroud do menu fechado aberto
            function menu() {
                document.getElementById('esconder').classList.remove('active');
                document.getElementById('esconder').classList.add('menu');
                document.getElementById('menu_img').classList.remove('menu-aberto');
                document.getElementById('menu_img').classList.add('menu-fechado');

            }

        </script>

        <script>
            //trocar a imagem do menu

            function mostrar1() {
                document.getElementById('img1').classList.add('naoMostrar');
                document.getElementById('img2').classList.remove('naoMostrar');
                document.getElementById('ul-link').classList.remove('inativo');
                document.getElementById('ul-link').classList.add('ativo');
            }


            function mostrar2() {
                document.getElementById('img2').classList.add('naoMostrar');
                document.getElementById('img1').classList.remove('naoMostrar');
                document.getElementById('ul-link').classList.remove('ativo');
                document.getElementById('ul-link').classList.add('inativo');
            }
        </script>


        <script>

            //codigo que descobre qual a classe que existe no elemnto e faz a troca desta classe quando clicado
            function menu() {
                var classes = document.getElementById('menu_img').className;
                if (classes == 'menu-fechado') {
                    document.getElementById('menu_img').classList.remove('menu-fechado');
                    document.getElementById('menu_img').classList.add('menu-aberto');
                } else {
                    document.getElementById('menu_img').classList.add('menu-fechado');
                    document.getElementById('menu_img').classList.remove('menu-aberto');
                }

            }

            //codigo do toggle do menu em telas pequenas
            $("#menu_img").click(function () {
                $(this).toggleClass('on');
                $(".menu").toggleClass("active");
            });
            $(".boraclicar").click(function () {
                $(this).toggleClass('on');
                $(".icons_tela_pequena").toggleClass("taclicado");
            });
            $(".praclicar").click(function () {
                $(this).toggleClass('on');
                $(".pramostrar").toggleClass("mostrado");
                $("#menu_img").click(function () {
                    $(this).toggleClass('on');
                    $(".pramostrar").toggleClass("desativar");
                });
            });
        </script>
        <script type="text/javascript">

            //codigo que some e aparece o menu ao fazer scrooll no mouse 
            var prevScrollpos = window.pageYOffset;
            window.onscroll = function () {

                var currentScrollpos = window.pageYOffset;
                if (prevScrollpos > currentScrollpos) {
                    document.getElementById("header-topo").style.top = "0";
                } else {
                    document.getElementById("header-topo").style.top = "-6vh";
                }

                prevScrollpos = currentScrollpos;
            }

        </script>
        <script>
            //codigo que faz smooth suave ao clicar no link ancora ate a section escolhida
            $('#ul-link a').on('click', function (e) {
                if (this.hash !== '') {
                    e.preventDefault();
                    const hash = this.hash;
                    $('html, body')
                            .animate({
                                scrollTop: $(hash).offset().top
                            }, 800);
                }
            });
            //codigo que traz de outra pagina(pagina destaque) para a home ja na section destaque mas perde o smooth
            //         if (window.location.<?php //echo BASE_URL      ?>"destaque".includes("#destaque"))
            //         {
            //            $(document).scrollTop(800);
            //         }
        </script>




        <script type="text/javascript">
            //codigo que faz sumir o menu em telas pequenas ao clicar em um link e tambem troca a img do menu fechado aberto
            function menu() {

                document.getElementById('ul-link').classList.remove('ativo');
                document.getElementById('ul-link').classList.add('inativo');
                document.getElementById('img2').classList.add('naoMostrar');
                document.getElementById('img1').classList.remove('naoMostrar');

            }

        </script>


    </body>
</html>
