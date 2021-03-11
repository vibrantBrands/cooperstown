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
      $a = new Area("Internal Content"); 
      $a->display($c);
    ?>
  </div>
	<div class="sidebar_container">
    <!--<h2>FAQ Links</h2>
    <ul class="nav"><li class=""><a href="/about-us/faq#tag-2" target="_self" class="">FAQ - Coaches Uniforms</a></li><li class=""><a href="/about-us/faq#tag-3" target="_self" class="">FAQ - Games</a></li><li class=""><a href="/about-us/faq#tag-4" target="_self" class="">FAQ - Check In</a></li><li class=""><a href="/about-us/faq#tag-5" target="_self" class="">FAQ - Opening Ceremonies &amp; Skills Competition</a></li><li class=""><a href="/about-us/faq#tag-6" target="_self" class="">FAQ - The Bunkhouses</a></li><li class=""><a href="/about-us/faq#tag-7" target="_self" class="">FAQ - Team Laundry Services</a></li><li class=""><a href="/about-us/faq#tag-8" target="_self" class="">FAQ - Trading Pins</a></li><li class=""><a href="/about-us/faq#tag-9" target="_self" class="">FAQ - Food Services &amp; Meals</a></li><li class=""><a href="/about-us/faq#tag-10" target="_self" class="">FAQ - Other</a></li></ul> -->
		
	</div>
</section>

<?php require('elements/footer.php'); ?>
