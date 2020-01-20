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
           <img src='<?php echo $this->getThemePath() ?>/images/internal/placeholder.png' alt='New Hope Community'>
           
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
            $bt = BlockType::getByHandle('autonav');
            $bt->controller->displayPages = 'top'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
            $bt->controller->displayPagesCID = ''; // if display pages is set �쁟ustom��
            $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'
            $bt->controller->displaySubPages = 'all';  //none', 'all, 'relevant_breadcrumb', 'relevant'
            $bt->controller->displaySubPageLevels = 'all'; // 'enough', 'enough_plus1', 'all', 'custom'
            $bt->controller->displaySubPageLevelsNum = ''; // if displaySubPages is set 'custom'
            $bt->render('templates/sidebar_nav'); // for template 'templates/template_name';
        ?>
	</div>
</section>

<?php require('elements/footer.php'); ?>
