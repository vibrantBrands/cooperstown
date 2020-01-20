<?php defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('elements/header_top.php');

$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();
?>

<header>
    <div class="topbar">
      <div>
        <cite>Limited Space for 2020 - Sign Up Today!</cite>
          <div>
            <i class="far fa-phone"></i><a href="tel:8454348300">(845) 434-8300</a>
          </div>
        </div>
      <div>
        <div class="social">
          <a href="/">Contact Us</a>
          <a href="/">FAQs</a>
          <a href="/"><i class="fa fa-facebook"></i></a>
          <a href="/"><i class="fa fa-youtube"></i></a>
        </div>
      </div>
    </div>
    <div class="navigation">
      <div class="toggle-wrapper">
        <p>MENU</p>
        <div class="menu-toggle inactive">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
          <span class="bg"></span>
        </div>
     </div>
     <div class="logo">
       <a href="/" class="desktop"><img src="<?php echo $this->getThemePath(); ?>/images/icons/CASV-logo-invt.svg" alt="Cooperstown All Star Village Logo"></a>
       <a href="/" class="mobile"><img src="<?php echo $this->getThemePath(); ?>/images/icons/CASV-logo-color.svg" alt="Cooperstown All Star Village Logo"></a>
     </div>
        <?php   
                    $bt = BlockType::getByHandle('autonav');
                    $bt->controller->displayPages = 'top'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
                    //$bt->controller->displayPagesCID = ''; // if display pages is set ‘custom’
                    $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'             
                    $bt->controller->displaySubPages = 'all';  //none', 'all, 'relevant_breadcrumb', 'relevant'
                    $bt->controller->displaySubPageLevels = 'all'; // 'enough', 'enough_plus1', 'all', 'custom'
                    $bt->controller->displaySubPageLevelsNum = '0'; // if displaySubPages is set 'custom'
                    $bt->render('templates/main_nav'); // for template 'templates/template_name';
                    ?>
    </div>
  </header>
