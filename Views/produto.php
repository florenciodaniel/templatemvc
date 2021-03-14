<style>
    #header-topo{
        display: none;
    }
    .rodape{
        display: none;
    }
</style>
<?php
foreach ($produto as $pro) {
    
}
?>
<div class="produto_escolhido">

    <div class="este-produto bcontainer">
        <a href="<?php echo BASE_URL ?>produtos?pg=<?php echo $pagina; ?>" class="fechar">fechar</a>
        <div class="container">
            <div class="container-img">
                <div class="img-pricipal mainphoto">
                    <img src="<?php echo BASE_URL ?>assets/media/produtos/<?php echo $imagens[0]['url']; ?>" alt=""/>
                </div>
                <div class="img-secundarias">
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
                <?php else: ?>
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
</div>


<script>
    $('.photo_item').on('click', function () {
        var url = $(this).find('img').attr('src');
        $('.mainphoto').find('img').attr('src', url);
    });
</script>