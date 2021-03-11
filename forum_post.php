<?php require('elements/header.php'); ?>

<div class="page-header">
    <?php
       $page = Page::getCurrentPage();

           if($image = $c->getAttribute('header_image')):
               $image = $c->getAttribute('header_image');
               $image_src = $image->getRelativePath();
       ?>
           <img src='<?php echo $image_src; ?>'>
           
       <?php else: ?>
           <img src='<?php echo $this->getThemePath() ?>/images/default-header.jpg' alt='Cooperstown All Star Village'>
           
       <?php endif; ?>
       
</div>

<section class="internal_content_wrapper">
  <div class="internal_content_container content">
    <?php
      $a = new GlobalArea("Forum Content"); 
      $a->display($c);
    ?>
  </div>

</section>

<?php require('elements/footer.php'); ?>
