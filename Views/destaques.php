<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>
<div class="destaque" id="destaque">
    
    
   <h2><span>Produtos em destaque</span></h2>
   
   <?php for($q=1;$q<=$np;$q++):?>
   <a href="<?php echo BASE_URL;?>?p=<?php echo $q;?>" class="<?php echo($pagAtual==$q)?'classe':'';?>">
       <p><?php echo $q;?></p>
   </a>
   <?php endfor;?>
   
   <div class="bcontainer container">
      <?php foreach ($produtos as $pro): ?>

         <a href="<?php echo BASE_URL ?>home/destaque?id=<?php echo $pro['id'] ?>">
            <div class="item">

               <img src="<?php echo BASE_URL ?>assets/media/produtos/<?php echo $pro['img'] ?>" alt=""/>
               <p class="nome"><span><?php echo $pro['nome'] ?></span></p>
               <p class="preco"><span> R$ <?php echo $pro['preco'] ?></span></p>
            </div>
         </a>

      <?php endforeach; ?>

<?php echo $merda;?>
   </div>
</div>

