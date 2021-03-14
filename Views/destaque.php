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
   <div class="bcontainer container">
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
         <p><span><?php echo $pro['nome']; ?></span></p>
         <hr>
         <p><span>R$ <?php echo $pro['preco']; ?></span></p>
         <hr>
         <p><span><?php echo $pro['descricao']; ?></span></p>
         <hr>
         <div  class="bwid_100 bflex bflejus_cen">
            <a href="<?php echo BASE_URL ?>" class="bbut_blu_red bfont_23 bmar_15 bpad_08 box_shadow_hover">Voltar</a> 
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