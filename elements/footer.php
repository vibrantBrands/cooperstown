<?php defined('C5_EXECUTE') or die("Access Denied.");

$footerSiteTitle = new GlobalArea('Footer Site Title');
$footerSiteTitleBlocks = $footerSiteTitle->getTotalBlocksInArea();

$footerSocial = new GlobalArea('Footer Social');
$footerSocialBlocks = $footerSocial->getTotalBlocksInArea();

$displayFirstSection = $footerSiteTitleBlocks > 0 || $footerSocialBlocks > 0 || $c->isEditMode();
?>

<footer>
	<div class="container">
		<div class="footerSection">
			<a href="/"><img class="logo" src="<?php echo $this->getThemePath(); ?>/images/icons/CASV-logo-invt.svg" alt="Cooperstown All Star Village Logo"></a>
	        <p id="footerAddress">Cooperstown All Star Village <br />P.O. Box 670, Cooperstown, NY 13326</p>
		</div>
		<div class="footerSection phone">
			<div>
				<i class="fa fa-phone" id="phoneIcon"></i><a href="tel:8003276790" id="phoneText">(800) 327-6790</a>	
				<p>&nbsp;</p>
				<p><strong>Office Hours</strong></p>
				<p><strong>Mon-Fri</strong> &nbsp; 9:00AM - 9:00PM Eastern</p>
				<p><strong>Saturday</strong> &nbsp; NOON - 4:00PM Eastern</p>
			</div>
			<img src="<?php echo $this->getThemePath(); ?>/images/icons/qr_code.png" alt="App QR Code">
			</div>
			
		</div>
	<div class="site-links">
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
	<a href="#top">
		<div class="back-to-top">
		  Return to Top &uarr;
		</div>
	</a>	
</footer>
<div class="mobile-menu">
	<a href="https://store.cooperstownallstarvillage.com/en/" target="_blank">
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/images/icons/shopping-bag.png" alt="shopping-bag" />
			<span>SHOPPING</span>
		</div>
	</a>
	<a href="/baseball">
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/images/icons/baseball.png" alt="baseball" />
			<span>BASEBALL</span>
		</div>
	</a>
	<a href="/families-and-players/staying-site">
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/images/icons/hotel.png" alt="hotel" />
			<span>HOTEL</span>
		</div>
	</a>
	<a href="/about-us/dining">
		<div>
			<img src="<?php echo $this->getThemePath(); ?>/images/icons/restaurant.png" alt="restaurant" />
			<span>RESTAURANT</span>
		</div>
	</a>
</div>

<?php $this->inc('elements/footer_bottom.php');?>
