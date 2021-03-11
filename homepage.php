<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<section class="main-banner"></section>
<section class="subnav">
	<div class="resources-box">
		<a href="/resources" class="resources">
			Team Registration
		</a>
	</div>
	<!-- <div>
		<a href="/coaches-umpires">
			<img src="<?php echo $this->getThemePath(); ?>/images/icons/icon-coach-umps.svg" alt="Coaches and Umpires" />Coaches / Umpires
		</a>
	</div>
	<div>
		<a href="https://docs.google.com/spreadsheets/d/1mEIZPMRx2VGNGhwmg_yxVSCDUENnHRL6mpICJDwTLmE/edit#gid=0" target="_blank">
			<img src="<?php echo $this->getThemePath(); ?>/images/icons/icon-tournament.svg" alt="Tournament" />Tournaments
		</a>
		</div>
	<div> 
		<div class="vid-indicator">
			<div class="dot"></div>
			<div class="pulse"></div>
		</div> -->
		<div class="onsite">
			<a href="https://guest.rezstream.com/search/cooperstown-all-star-village">
				Book Onsite Hotel
			</a>
		</div>
</section>
<section class="pic-links">
	<?php
  $fs = FileSet::getByName('Home Page Links');
  $fl = new FileList();
  $fl->filterBySet($fs);
  $fl->sortBy('fsDisplayOrder', 'asc');
  $files = $fl->get();
 
  foreach($files as $f) {
    $downloadpath = $f->getDownloadURL();
    $imagepath = $f->getRelativePath();
    $title = $f->getTitle();
    $description = $f->getDescription(); ?>
    <a href="<?php echo $description; ?>">
		<img src="<?php echo $imagepath; ?>" />
    	<span><?php echo $title; ?></span>
	</a>
    
 <?php } ?>
</section>
<section class="compete" aos-init aos-animate data-aos="zoom-in-up">
	<div class="container">
		<div class="description">
		<h3>Compete Against the Best 12U Teams</h3>
		<h4>Major League Fields & World-Class Facitilies</h4>
	<p>Cooperstown All Star Village is a world-class family baseball resort located just outside the birthplace of baseball, Cooperstown, New York.</p>
	<p>Our baseball summer camp offers tournaments on major league style baseball fields for kids 12U. <p>Your team will play teams from across the country and around the world!</p>
	<p>We offer luxurious onsite accommodations for the whole family, swimming pools, and a CASV gear store. So come and visit America’s first and only kids’ baseball tournament camp designed for the whole family!</p>
		</div>
		<div class="img-link">
			<div>
				<a href="//www.youtube.com/watch?v=LTSZYnZpFs8" data-lity>
					<span>Video Tour</span>
					<div class="img-box">
						<img src="<?php echo $this->getThemePath(); ?>/images/Video-tour.png" alt="Video Tour" />
					</div>
				</a>
			</div>
			<div>
				<a href="<?php echo $this->getThemePath(); ?>/images/CASV_Brochure_2018.pdf" target="_blank">
					<span>Digital Brochure</span>
					<div class="img-box">
						<img src="<?php echo $this->getThemePath(); ?>/images/Digital-brochure.png" alt="Digital Brochure" />
					</div>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="news-stand container">
	<h3>CASV News Stand</h3>
	<?php
    	$a = new Area('Blog Entries');
   		$a->display($c);
	?>
</section>

<section class="why-casv">
	<h2>Why Cooperstown All Star Village?</h2>
	<div class="container">
		<div>
			<ul>
				<li aos-init aos-animate data-aos="flip-left">
					<img src="<?php echo $this->getThemePath(); ?>/images/icons/icon-baseball.svg" alt="Baseball" />
					<p>Compete against the best 12U teams!</p>
				</li>
				<li aos-init aos-animate data-aos="flip-left">
					<img src="<?php echo $this->getThemePath(); ?>/images/icons/icon-uniforms.svg" alt="Uniforms" />
					<p>All Players receive our official professional style uniforms as part of their package!</p>
				</li>
				<li aos-init aos-animate data-aos="flip-left">
					<img src="<?php echo $this->getThemePath(); ?>/images/icons/icon-location.svg" alt="Locations" />
					<p>We are located on the outskirts of Cooperstown!</p></li>
			</ul>
		</div>
		<div>
			<ul>
				<li aos-init aos-animate data-aos="flip-left">
					<img src="<?php echo $this->getThemePath(); ?>/images/icons/icon-AC.svg" alt="Air Conditioned" />
					<p>Players stay in air-conditioned bunkhouses with 55inch flat screen TVs!</p>
				</li>
				<li aos-init aos-animate data-aos="flip-left">
					<img src="<?php echo $this->getThemePath(); ?>/images/icons/icon-dining.svg" alt="Dining" />
					<p>Mom and Dad can enjoy our on-site accommodations, and full service dining!</p>
				</li>
				<li aos-init aos-animate data-aos="flip-left">
					<img src="<?php echo $this->getThemePath(); ?>/images/icons/icon-fields.svg" alt="Fields" />
					<p>Our player village includes professionally lit ball fields and heated swimming pools!</p>
				</li>
				
			</ul>
		</div>
	</div>
</section>

<section class="social-section">
	<div class="container" aos-animate data-aos="zoom-in-up">
		<div></div>
		<div>
			<h2>Get Social<i class="fa fa-comments"></i></h2>
			<div class="facebook-box">
				<img class="logo" src="<?php echo $this->getThemePath(); ?>/images/icons/CASV-logo-color.svg" alt="Cooperstown Logo" />
<p><div class="commonninja_component" comp-type="feed" comp-id="6a282da4-1d07-4062-9eb9-7200a7fc657b"></div></p>
			</div>
			<div class="fb-link">
 				<div><a href="https://www.facebook.com/CooperstownASV/"><i class="fa fa-facebook"></i>Cooperstown All Star Village</a></div>
 				<div>Jan. 13, 2020</div>
			</div>
		</div>
	</div>
</section>

<section class="testimonials">
	<div>
		<?php
            $a = new Area('Testimonial Slider');
            $a->display($c);
        ?>
	</div>
	<div>
		<?php
            $a = new Area('Image Slider');
            $a->display($c);
        ?>
    </div>
</section>


<?php require('elements/footer.php'); ?>