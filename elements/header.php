<?php defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('elements/header_top.php');

$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();
?>

<header class="header">
  <a name="top"></a>
    <div class="topbar">
      <div>
        <cite class="limited-space">Limited Space for 2021 - Sign Up Today!</cite>
        <a class="button blue" href="/resources">Book Now</a>
          <div>
            <i class="fa fa-phone"></i><a href="tel:18003276790">1-800-327-6790</a>
          </div>
        </div>
      <div>
        <div class="social">
          <a href="/contact-us">Contact Us</a>
          <a href="/about-us/faq">FAQs</a>
          <a href="https://www.facebook.com/CooperstownASV/" target="social"><i class="fa fa-facebook"></i></a>
          <a href="https://www.youtube.com/user/CooperstownAllStar" target="social"><i class="fa fa-youtube"></i></a>
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
