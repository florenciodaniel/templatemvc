<?php

?>
<div class="produtos" id="destaque">
    
    
<!--   <h2><span>PRODUTOS</span></h2>-->
   
   
   
   <div class="bcontainer container">
      <?php foreach ($produtos as $pro): ?>

         <a href="<?php echo BASE_URL ?>produtos/produto?id=<?php echo $pro['id'] ?>&page=<?php echo $pagAtual ?>">
            <div class="item">

               <img src="<?php echo BASE_URL ?>assets/media/produtos/<?php echo $pro['img'] ?>" alt=""/>
               <p class="nome"><span><?php echo $pro['nome'] ?></span></p>
                    
                    <?php if ($pro['preco_promocao']!=0): ?>
                    <p class="preco"> <span>DE R$  <strike><?php echo $pro['preco'] ?></strike></span></p>
                    <?php else:?>
                    <p class="preco_promocao"> <span> R$ <?php echo $pro['preco'] ?></span></p>
                    <?php endif;?>
                    
                    <?php if ($pro['preco_promocao']!=0): ?>
                    <p class="preco_promocao"><span>POR  R$ <?php echo $pro['preco_promocao'] ?></span></p>
                    <?php endif;?>
            </div>
         </a>

      <?php endforeach; ?>

   </div>
   <div class="bwid_100 bflex bflejus_cen">
   <?php for($q=1;$q<=$np;$q++):?>
   <a href="<?php echo BASE_URL;?>produtos?pg=<?php echo $q;?>" class="<?php echo($pagAtual==$q)?'classe':'';?>">
       <button class="bbut_blu bmar_15 bpad_06 bpadlef_1 bpadrig_1"><?php echo $q;?></button>
   </a>
   <?php endfor;?>
       </div>
</div>
