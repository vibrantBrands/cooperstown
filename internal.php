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
  		<?php
        $intChildPages = $c->getNumChildren();
        if ($intChildPages > 0) {
            $displayPages = "below";
        }
        else {
            $displayPages = "current";
        }
        
            $bt = BlockType::getByHandle('autonav');
            $bt->controller->displayPages = $displayPages; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
            $bt->controller->displayPagesCID = '205'; // if display pages is set ‘custom’
            $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'             
            $bt->controller->displaySubPages = 'none';  //none', 'all, 'relevant_breadcrumb', 'relevant'          
            $bt->controller->displaySubPageLevels = 'all'; // 'enough', 'enough_plus1', 'all', 'custom'
            $bt->controller->displaySubPageLevelsNum = '0'; // if displaySubPages is set 'custom'
            $bt->controller->outputAutoHeaderItems();
            $bt->render('templates/internal_sidebar'); // for template 'templates/template_name';
      ?>
      <?php
      $a = new Area("Sidebar Content"); 
      $a->display($c);
    ?>
	</div>
</section>

<?php require('elements/footer.php'); ?>
