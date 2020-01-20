<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<section class="main-banner"></section>
<section class="subnav">
	<div>
		<a href="/resources">
			Resources
		</a>
	</div>
	<div>
		<a href="/coaches-umpires">
			<img src="<?php echo $this->getThemePath(); ?>/images/icons/icon-coach-umps.svg" alt="Coaches and Umpires" />Coaches / Umpires
		</a>
	</div>
	<div>
		<a href="/tournaments">
			<img src="<?php echo $this->getThemePath(); ?>/images/icons/icon-tournament.svg" alt="Tournament" />Tournament
		</a>
		</div>
	<div>
		<div class="vid-indicator">
			<div class="dot"></div>
			<div class="pulse"></div>
		</div>
		<p>Watch <span>LIVE</span></p>
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
	<div style="background:url('<?php echo $imagepath; ?>');background-size:cover;background-position:center">
    	<span><?php echo $title; ?></span>
	</div></a>
    
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
		<div class="video-brochure">
			<div>
				<span>Video Tour</span>
			</div>
			<div>
				<span>Digital Brochure</span>
			</div>
		</div>
	</div>
</section>

<section class="why-casv">
	<h2>Why Cooperstown All Star Village?</h2>
	<div class="container">
		<div>
			<ul>
				<li aos-init aos-animate data-aos="flip-left">
					<img src="<?php echo $this->getThemePath(); ?>/images/icons/icon-uniforms.svg" alt="Uniforms" />
					<p>All Players receive our official professional style uniforms as part of their package!</p>
				</li>
				<li aos-init aos-animate data-aos="flip-left">
					<img src="<?php echo $this->getThemePath(); ?>/images/icons/icon-location.svg" alt="Locations" />
					<p>We are located on the outskirts of Cooperstown!</p></li>
				<li aos-init aos-animate data-aos="flip-left">
					<img src="<?php echo $this->getThemePath(); ?>/images/icons/icon-fields.svg" alt="Fields" />
					<p>Our player village includes professionally lit ball fields and heated swimming pools!</p>
				</li>
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
					<img src="<?php echo $this->getThemePath(); ?>/images/icons/icon-views.svg" alt="Air Conditioned" />
					<p>Our mountain backdrop offers breathtaking views!</p>
				</li>
			</ul>
		</div>
	</div>
</section>

<section class="social-section">
	<div class="container" aos-animate data-aos="zoom-in-up">
		<div></div>
		<div>
			<h2>Get Social <i class="far fa-comments"></i></h2>
			<div class="facebook-box">
				<img class="logo" src="<?php echo $this->getThemePath(); ?>/images/icons/CASV-logo-color.svg" alt="Cooperstown Logo" />
				<p><strong>Another GREAT WEEK at CASV!</strong></p>
<p>“Had a wonderful time at the Cooperstown All Star Village this week. Beautiful campus and fields, friendly staff and great competition. We were lucky enough to bring home 1st place. Great teamwork all around.”</p>
			</div>
			<div class="fb-link">
 				<div><a href="https://www.facebook.com/CooperstownASV/"><i class="fab fa-facebook-square"></i>Cooperstown All Star Village</a></div>
 				<div>Jan. 13, 2020</div>
			</div>
		</div>
	</div>
</section>

<section class="testimonials" aos-init aos-animate data-aos="fade-up">
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