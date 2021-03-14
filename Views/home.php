
<section class="slide_home" id="banner">

    <div class="cycle-slideshow"
         data-cycle-fx=fadeout
         data-cycle-timeout=3200
         data-cycle-pager-event="mouseover"
         >

        <div class="cycle-pager"></div>
        <div class="cycle-overlay"></div>
        <img src="<?php echo BASE_URL ?>assets/img/slide/GettyImages-523468730.jpg" alt="" data-cycle-title="<h1><span>Entrega<br class='sbr'> Gratuíta*</span></h1>"
             data-cycle-desc="<p><span>telefone (99)8681-5681</span></p><p><span> whatsapp (99)99856-1467</span></p>">

            <img src="<?php echo BASE_URL ?>assets/img/slide/sl2.jpg" alt="" data-cycle-title="<h1><span>5 X no cartão</span></h1>"
                 data-cycle-desc="<p><span>telefone (99)8681-5681</span></p><p><span> whatsapp (99)99856-1467</span></p>">

                <img src="<?php echo BASE_URL ?>assets/img/slide/960x0.jpg" alt="" data-cycle-title="<h1><span>Montagem gratís</span></h1>"
                     data-cycle-desc="<p><span>telefone (99)8681-5681</span></p><p><span> whatsapp (99)99856-1467</span></p>">

                    <img src="<?php echo BASE_URL ?>assets/img/slide/sl4.jpg" alt="" data-cycle-title="<h1><span>Orçamento Gratuíto</span></h1>"
                         data-cycle-desc="<p><span>telefone (99)8681-5681</span></p><p><span> whatsapp (99)99856-1467</span></p>">
                        </div>

                        </section>
                        <a href="https://api.whatsapp.com/send?phone=554891171053&text=Texto%20aqui"
                           target="_blank"
                           style="position:fixed;top:60px;left:40px; box-shadow: -5px -5px  white;">
                            <svg enable-background="new 0 0 512 512" width="50" height="50" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z" fill="#4CAF50"/><path d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z" fill="#FAFAFA"/></svg>
                        </a>
                        <div class="sobre">
                            <div class="container  bcontainer"  data-boot_aparecer="dir">
                                <h2><span>KALUSA MOVEIS</span></h2>
                                <p>Fusce lobortis rutrum turpis consectetur mattis. Ut dui est, elementum eget vehicula ac, bibendum non tellus. Aliquam aliquam scelerisque odio sed scelerisque. Nullam ligula turpis, lacinia ut massa id, suscipit lacinia eros. Cras pharetra iaculis dolor quis sollicitudin. Nam condimentum efficitur arcu, eget pretium turpis lobortis vel. Proin blandit bibendum molestie. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque facilisis sollicitudin elit, at feugiat enim rhoncus et. Nulla sit amet volutpat dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin sit amet lacus aliquam quam lacinia iaculis.</p>
                                <p>Maecenas id varius velit, ut ultrices nulla. Nullam non odio suscipit, faucibus velit mollis, faucibus risus. Sed vulputate rhoncus ultricies. Sed mollis, erat nec molestie luctus, erat felis bibendum purus, ut maximus orci lorem vitae turpis. Integer pellentesque eu velit non faucibus. Cras eget molestie urna, ut pulvinar tortor. Vestibulum suscipit quam nec velit luctus hendrerit. Proin sit amet ante ac turpis vestibulum rutrum at a ante. </p>
                                <p>In sollicitudin dapibus lacus vitae commodo. Vivamus non velit in dui blandit porta. Duis fringilla pellentesque augue, a mattis sapien consectetur sed. Nullam blandit diam nec ultrices bibendum. Aliquam erat volutpat. Suspendisse at ex ultricies, dictum libero et, venenatis dolor. In tempus tincidunt dui vel dapibus. Sed lacinia mattis mi. Aliquam sodales faucibus turpis vitae blandit. Vestibulum vulputate magna ligula, a dignissim nibh malesuada id. In rutrum commodo dignissim.</p>
                            </div>
                        </div>
                        <div class="destaque" id="destaque">
                            <h2 data-boot_aparecer="aparecer"><span>Produtos em destaque</span></h2>
                            <div class="bcontainer container" >
                                <?php foreach ($produtos as $pro): ?>

                                    <a href="#<?php echo $pro['id'] ?>">
                                        <div class="item" data-boot_flip="baixo">

                                            <img src="<?php echo BASE_URL ?>assets/media/produtos/<?php echo $pro['img'][0]['url'] ?>" alt=""/>
                                            <p class="nome"><span><?php echo $pro['nome'] ?></span></p>

                                            <?php if ($pro['preco_promocao'] != 0): ?>
                                                <p class="preco"> <span>DE R$  <strike><?php echo $pro['preco'] ?></strike></span></p>
                                            <?php else: ?>
                                                <p class="preco_promocao"> <span> R$ <?php echo $pro['preco'] ?></span></p>
                                            <?php endif; ?>

                                            <?php if ($pro['preco_promocao'] != 0): ?>
                                                <p class="preco_promocao"><span>POR  R$ <?php echo $pro['preco_promocao'] ?></span></p>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                    <div id="<?php echo $pro['id'] ?>" class="modal-destaque">
                                        <a href="#fechar" class="fechar">fechar</a>

                                        <div class="bcontainer container">
                                            <div class="container-img">
                                                <div class="img-pricipal mainphoto">
                                                    <img src="<?php echo BASE_URL ?>assets/media/produtos/<?php echo $pro['img'][0]['url'] ?>" alt=""/>
                                                </div>
                                                <div class="img-secundarias">
                                                    <?php $imagens = $pro['img']; ?>
                                                    <?php foreach ($imagens as $img): ?>
                                                        <div class="item photo_item">
                                                            <img src="<?php echo BASE_URL ?>assets/media/produtos/<?php echo $img['url']; ?>" alt=""/>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <div class="container-info">

                                                <?php if (!empty($pro['nome'])): ?>
                                                    <p><span><?php echo $pro['nome']; ?></span></p>
                                                <?php endif; ?>

                                                <?php if (!empty($pro['descricao'])): ?>
                                                    <p><span><?php echo $pro['descricao']; ?></span></p>
                                                <?php endif; ?>

                                                <?php if (!empty($pro['preco']) && $pro['preco_promocao'] != 0): ?>
                                                    <h6>De</h6>
                                                    <p><span>R$ = <strike><?php echo $pro['preco']; ?></strike></span></p>
                                                    <?php else:?>
                                                    <h6>Preço</h6>
                                                    <p><span>R$ = <?php echo $pro['preco']; ?></span></p>
                                                <?php endif; ?>
                                                    
                                                
                                                <?php if ($pro['preco_promocao'] != 0): ?>
                                                    <h6>Por</h6>
                                                    <p><span>R$ = <?php echo $pro['preco_promocao']; ?></span></p>
                                                <?php endif; ?>


                                            </div>
                                        </div>

                                    </div>
                                <?php endforeach; ?>


                            </div>

                        </div>

                        <script>
                            //codigo que troca img principal por imgs secundarias quando clicadas sobre elas
                            $('.photo_item').on('click', function () {
                                var url = $(this).find('img').attr('src');
                                $('.mainphoto').find('img').attr('src', url);

                            });

                            $('.item').on('click', function () {
                                var url = $(this).find('img').attr('src');
                                $('.mainphoto').find('img').attr('src', url);

                            });


                        </script>
                        <div class="feedback">
                            <h2 data-boot_aparecer="aparecer"><span>Nossa propaganda são clientes satisfeitos</span></h2>
                            <div class="bcontainer container">
                                <div class="depoimento" data-boot_flip="esquerda">
                                    <div class="depoimento-img">
                                        <img src="<?php echo BASE_URL ?>assets/img/depoimentos/36176785_1672011942912182_145415592503934976_n.jpg" alt=""/>
                                    </div>
                                    <p>nome da pessoa</p>
                                    <p>
                                        Esta musica é um dialogo entre os "eus" para o seu verdadeiro Ser, quando ele diz muro é a respeito das barreiras que estes "eus" criam na existencia, pois só conhecerao a verdade quando tiver liberdade total, mas nao esta simples material, mas sim liberdade de seu verdadeiro Ser. 
                                    </p>
                                </div>
                                <div class="depoimento" data-boot_flip="baixo">
                                    <div class="depoimento-img">
                                        <img src="<?php echo BASE_URL ?>assets/img/depoimentos/d85b5eaf4ac092dddbfbf4fa13327f45.jpg" alt=""/>
                                    </div>
                                    <p>nome da pessoa</p>
                                    <p>
                                        Esta musica é um dialogo entre os "eus" para o seu verdadeiro Ser, quando ele diz muro é a respeito das barreiras que estes "eus" criam na existencia, pois só conhecerao a verdade quando tiver liberdade total, mas nao esta simples material, mas sim liberdade de seu verdadeiro Ser. 
                                    </p>
                                </div>
                                <div class="depoimento" data-boot_flip="direita">
                                    <div class="depoimento-img">
                                        <img src="<?php echo BASE_URL ?>assets/img/depoimentos/adult-1867889_1280.jpg" alt=""/> 
                                    </div>
                                    <p>nome da pessoa</p>
                                    <p>
                                        Esta musica é um dialogo entre os "eus" para o seu verdadeiro Ser, quando ele diz muro é a respeito das barreiras que estes "eus" criam na existencia, pois só conhecerao a verdade quando tiver liberdade total, mas nao esta simples material, mas sim liberdade de seu verdadeiro Ser. 
                                    </p>
                                </div>
                            </div>
                        </div>




                        <div id="contato" class="contato">
                            <div class="container bcontainer">
                                <h2 data-boot_aparecer="aparecer"><span>Estamos a sua disposição</span></h2>
                                <p>Para um melhor atendimento disponibilamos varios meios para receber o seu contato</p>
                                <div class="contato-container" data-boot_aparecer="aparecer">
                                    <div class="contato-box">
                                        <div class="box-icon">
                                            <img src="<?php echo BASE_URL ?>assets/img/icons/iconfone.png" alt=""/>
                                            <span>telefone (99)8681-5681</span>
                                        </div>
                                        <div class="box-icon">
                                            <img src="<?php echo BASE_URL ?>assets/img/icons/iconfone.png" alt=""/>
                                            <span>telefone (99)8681-4519</span>
                                        </div>
                                        <div class="box-icon">
                                            <img src="<?php echo BASE_URL ?>assets/img/icons/whatsicon.png" alt=""/>
                                            <span>whatsapp (99)99856-1467</span>
                                        </div>
                                        <div class="box-icon">
                                            <img src="<?php echo BASE_URL ?>assets/img/icons/email-messages-icon-16.png" alt=""/>
                                            <span>contato@kalusamoveis.com</span>
                                        </div>
                                        <div class="box-icon">
                                            <img src="<?php echo BASE_URL ?>assets/img/icons/insticon.png" alt=""/>
                                            <span>@kalusamoveis</span>
                                        </div>
                                        <div class="box-icon">
                                            <img src="<?php echo BASE_URL ?>assets/img/icons/facicon.png" alt=""/>
                                            <span>facebook/kalusamoveis</span>
                                        </div>

                                    </div>

                                    <div class="contato-box">
                                        <p>envie sua mensagem</p>
                                        <form>
                                            <div class="form">
                                                <div class="input a1">
                                                    <label>Nome completo</label>
                                                    <input type="text" name="dias" autocomplete="off" required="">
                                                </div>
                                                <div class="input a2">
                                                    <label>Telefone</label>
                                                    <input type="text" name="dias" autocomplete="off" required="">
                                                </div>
                                                <div class="input a3">
                                                    <label>Assunto</label>
                                                    <input type="text" name="dias" autocomplete="off" required="">
                                                </div>
                                                <div class="input a4">
                                                    <label>Menssagem</label>
                                                    <textarea name="comentario">
      
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="bwid_100 bflex bflejus_cen">
                                                <button class="bbut_blu bpad_08 bfont_2">Enviar Menssagem</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="maps">
                            <h2><span>Visite a Kalusa Moveis</span></h2>
                            <p><span>Rua Joaquim Romeu Belterin N° 1538 - Bairro São Francisco - CEP 99052-014 - Passo Fundo RS</span></p>
                            <div class="bcontainer container" data-boot_aparecer="aparecer">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7037.11208195933!2d-52.41079727550997!3d-28.266246423662963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1581712201500!5m2!1spt-BR!2sbr" width="100%" height="600" frameborder="0"  allowfullscreen="" class="bmartop_13"></iframe>
                            </div>

                        </div>



