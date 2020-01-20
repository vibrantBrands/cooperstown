<?php defined('C5_EXECUTE') or die("Access Denied.");

$footerSiteTitle = new GlobalArea('Footer Site Title');
$footerSiteTitleBlocks = $footerSiteTitle->getTotalBlocksInArea();

$footerSocial = new GlobalArea('Footer Social');
$footerSocialBlocks = $footerSocial->getTotalBlocksInArea();

$displayFirstSection = $footerSiteTitleBlocks > 0 || $footerSocialBlocks > 0 || $c->isEditMode();
?>

<footer>
        <div>
            <a href="/"><img class="logo" src="<?php echo $this->getThemePath(); ?>/images/icons/CASV-logo-invt.svg" alt="Cooperstown All Star Village Logo"></a>
            <p>Cooperstown All Star Village <br />P.O. Box 670, Cooperstown, NY 13326</p>
        </div>
        <div class="phone">
            <span><i class="far fa-phone"></i><a href="tel:8003276790">(800) 327-6790</a></span>
            <span><a href="/"><i class="fa fa-facebook"></i></a>
            <a href="/"><i class="fa fa-youtube"></i></a></span>
        </div>  
</footer>

<?php $this->inc('elements/footer_bottom.php');?>
