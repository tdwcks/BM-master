<?php 
	session_start();
	header('Cache-control: private'); // IE 6 FIX
	 
	if(isSet($_GET['lang']))
	{
	$lang = $_GET['lang'];
	 
	// register the session and set the cookie
	$_SESSION['lang'] = $lang;
	 
	setcookie('lang', $lang, time() + (3600 * 24 * 30));
	}
	else if(isSet($_SESSION['lang']))
	{
	$lang = $_SESSION['lang'];
	}
	else if(isSet($_COOKIE['lang']))
	{
	$lang = $_COOKIE['lang'];
	}
	else
	{
	$lang = 'en';
	}
	 
	switch ($lang) {
	  case 'en':
	  $lang_file = 'lang.en.php';
	  break;
	 
	  case 'de':
	  $lang_file = 'lang.de.php';
	  break;
	 
	  case 'es':
	  $lang_file = 'lang.es.php';
	  break;
	 
	  default:
	  $lang_file = 'lang.en.php';
	 
	}
	 
	include_once 'languages/'.$lang_file;

	include 'includes/global/header.php'; 
?>
<header>

	<div class="grid-container">

		<div class="col-3">

		<a><img src="img/bm_logo.svg"/></a>

		</div> <!-- col-3 -->

		<div class="col-6">

			<div id="nav-anchor"></div>

			<nav>

				<ul>
					<li class="home"><a href="#home"><?php echo $lang['MENU_HOME']; ?></a></li>
					<li><a href="#about"><?php echo $lang['MENU_ABOUT']; ?></a></li>
					<li><a href="#what"><?php echo $lang['MENU_WHAT_WE_DO']; ?></a></li>
					<li><a href="#project"><?php echo $lang['MENU_PROJECTS']; ?></a></li>
					<li><a href="#contact"><?php echo $lang['MENU_CONTACT']; ?></a></li>
				</ul>

			</nav>

		</div> <!-- col-6 -->

		<div class="col-3">

			<div class="language-selector">

				<?php 
					switch ($lang) {
					  case 'en':
					  echo 'English';
						echo '<a class="language-selected"><img src="img/great_britain.svg"/><span>English</span></a>';
					  break;
					 
					  case 'de':
						echo '<a class="language-selected"><img src="img/german.svg"/><span>Deutsche</span></a>';
					  break;
					 
					  case 'es':
						echo '<a class="language-selected"><img src="img/spain.svg"/><span>Español</span></a>';
					  break;
					 
					  default:
					  	echo '<a class="language-selected"><img src="img/great_britain.svg"/><span>English</span></a>';
					 
					}
				?>

				<ul class="dropdown">
					<li><a href="?lang=en"><img src="img/great_britain.svg"/><span>English</span></a></li>
					<li><a href="?lang=de"><img src="img/german.svg"/><span>Deutsche</span></a></li>
					<li><a href="?lang=es"><img src="img/spain.svg"/><span>Español</span></a></li>
				</ul>

			</div> <!-- language-selector -->

		</div> <!-- col-3 -->

	</div> <!-- grid-container -->

</header>

<article id="content">

	<section id="home" class="home">

		<div class="grid-container">

			<div class="col-7">

				<?php echo $lang['MAIN']; ?>

			</div> <!-- col-7 -->

		</div> <!-- grid-container -->

		<img src="img/bm_sky.jpg"/>

	</section> <!-- home-splash -->

	<section class="home-triangle">

		<div class="top-right">
			<svg version=1.1 id=Layer_1 xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink x=0px y=0px viewBox="0 0 79 85.634" enable-background="new 0 0 79 85.634" xml:space=preserve><path id=XMLID_2_ fill=#E1E1E1 d="M1,78.2V1h77.2L1,78.2z M2,2v73.8L75.8,2H2z"/></svg>
		</div>

		<div class="bottom-right">
			<svg version=1.1 id=Layer_1 xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink x=0px y=0px viewBox="0 0 156.5 169.641" enable-background="new 0 0 156.5 169.641" xml:space=preserve><path id=XMLID_49_ fill=#E1E1E1 d="M4.296,135.881v-90.41h90.41L4.296,135.881z M5.467,46.642v86.428l86.428-86.428H5.467z"/><path id=XMLID_46_ fill=#E1E1E1 d="M60.609,119.919v-90.41h90.41L60.609,119.919z M61.78,30.68v86.428l86.428-86.428H61.78z"/></svg>
		</div>

		<div class="bottom-left">
			<svg version=1.1 id=Layer_1 xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink x=0px y=0px viewBox="0 0 156.5 169.641" enable-background="new 0 0 156.5 169.641" xml:space=preserve><path id=XMLID_47_ fill=#E1E1E1 d="M76.2,153.4V76.2h77.2L76.2,153.4z M77.2,77.2V151L151,77.2H77.2z"/><path id=XMLID_44_ fill=#E1E1E1 d="M0.7,77.9V0.7h77.2L0.7,77.9z M1.7,1.7v73.8L75.5,1.7L1.7,1.7L1.7,1.7z"/><path id=XMLID_3_ fill=#E1E1E1 d="M77.2,77.2H0L77.2,0V77.2z M2.4,76.2h73.8V2.4L2.4,76.2z"/></svg>
		</div>

		<div class="top-left">
			<svg version=1.1 id=Layer_1 xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink x=0px y=0px viewBox="0 0 156.5 169.641" enable-background="new 0 0 156.5 169.641" xml:space=preserve><path id=XMLID_49_ fill=#E1E1E1 d="M4.296,135.881v-90.41h90.41L4.296,135.881z M5.467,46.642v86.428l86.428-86.428H5.467z"/><path id=XMLID_46_ fill=#E1E1E1 d="M60.609,119.919v-90.41h90.41L60.609,119.919z M61.78,30.68v86.428l86.428-86.428H61.78z"/></svg>
		</div>

	</section>

	<section id="about" class="about">

		<div class="grid-container">

			<div class="row">

				<div class="col-8">

					<h2><?php echo $lang['ABOUT_TITLE']; ?></h2>

					<?php echo $lang['ABOUT_TEXT']; ?>

				</div> <!-- col-8 -->
 
			</div> <!-- row -->

			<div class="row">

				<div class="poly-strip">

					<img src="img/bm-1.jpg">
					<img src="img/bm-2.jpg">
					<img src="img/bm-1.jpg">

				</div> <!-- poly-strip -->

			</div>  <!-- row -->

		</div> <!-- grid-container -->

	</section> <!-- about -->

	<div class="grid-container">

	<section id="what" class="what">

			<div class="row">

				<div class="col-8 center">

					<h2><?php echo $lang['WHAT_WE_DO_TITLE']; ?></h2>

					<?php echo $lang['WHAT_WE_DO_TEXT']; ?>

				</div> <!-- col-8 -->

			</div> <!-- row -->

			<div class="row residential">

				<div class="col-1"><div class="grid-spacer"></div></div>

				<div class="col-4">

					<img src="img/bm_residential.svg">

				</div>

				<div class="col-6">

					<?php echo $lang['RESIDENTIAL_TEXT']; ?>

				</div>

			</div> <!-- row -->

			<div class="row conversion">

				<div class="col-1"><div class="grid-spacer"></div></div>

				<div class="col-4">

					<img src="img/bm_total_conversion.svg">

				</div>

				<div class="col-6">

					<?php echo $lang['NEW_BUILD_TEXT']; ?>

				</div>

			</div> <!-- row -->

			<div class="row refurbishment">

				<div class="col-1"><div class="grid-spacer"></div></div>

				<div class="col-4">

					<img src="img/bm_refurbishment.svg">

				</div>

				<div class="col-6">

					<?php echo $lang['REFURBISHMENT_TEXT']; ?>

				</div>

			</div> <!-- row -->

			<div class="row management">

				<div class="col-1"><div class="grid-spacer"></div></div>

				<div class="col-4">

					<img src="img/bm_management.svg">

				</div>

				<div class="col-6">

					<?php echo $lang['AFTERCARE_TEXT']; ?>

				</div>

			</div> <!-- row -->

		</section> <!-- what -->

	</div> <!-- grid-container -->

	<section id="project" class="project">

		<div class="grid-container">
					
				<img class="logo-centre" src="img/bm-mark.svg">

			<div class="swiper-container">

		        <div class="swiper-wrapper">
		            <div class="swiper-slide"><img src="img/slide-1.jpg"></div>
		            <div class="swiper-slide"><img src="img/slide-1.jpg"></div>
		            <div class="swiper-slide"><img src="img/slide-1.jpg"></div>
		        </div>
		        <!-- Add Arrows -->
		        <div class="swiper-button-next"></div>
		        <div class="swiper-button-prev"></div>
		    </div>

	    </div> <!-- grid-container -->

	</section> <!-- project -->

	<section id="contact" class="contact">

		<div class="grid-container">

			<div class="row">

				<div class="col-8">

					<?php echo $lang['CONTACT_TEXT']; ?>

				</div> <!-- col-8 -->

			</div> <!-- row -->

			<div class="row details">

				<div class="col-4">

					<h4>Robert Lucas BSc (Hons) MRICS</h4>
					<a href="tel:+44 7715 488781">+44 7715 488781</a>
					<a href="mailto:rob@bm-pap.com">rob@bm-pap.com</a>

				</div> <!-- col-4 -->

				<div class="col-4">

					<h4>Iván Mariano Cazorla</h4>
					<a href="tel:+34 650 545 997">+34 650 545 997</a>
					<a href="mailto:ivan@bm-pap.com">ivan@bm-pap.com</a>

				</div> <!-- col-4 -->

				<div class="col-4">

					<h4>BM Property &amp; Projects</h4>
					<p>C/. Mar Mediterráneo, 43A Local 16 Pol. Ind. Son Bugadelles 07180 Santa Ponsa Mallorca</p>

				</div> <!-- col-4 -->

			</div> <!-- row -->

			<div class="row">

				<div id="map"></div>

			</div>

		</div> <!-- grid-container -->

	</section> <!-- Contact -->

</article>

<script>

    L.mapbox.accessToken = 'pk.eyJ1IjoidGR3Y2tzIiwiYSI6IlhwMGlGR28ifQ.irq5Rbn1WvGb_VIwn1auNA';
    var map = L.mapbox.map('map', 'mapbox.satellite')
    .setView([39.502944, -2.471542], 16);

    map.scrollWheelZoom.disable();

    var myLayer = L.mapbox.featureLayer().addTo(map);

    var geoJson = [{

        type: 'Feature',
        "geometry": { "type": "Point", "coordinates": [-2.471542,39.502944]},
        "properties": {
            "icon": {
                "iconUrl": "img/map_icon.svg",
                "iconSize": [100, 100], // size of the icon
                "iconAnchor": [35, 85], // point of the icon which will correspond to marker's location
            }
        } 

    }, {
        // Add Another Point
    }];

    // Add custom popups to each using our custom feature properties
    myLayer.on('layeradd', function(e) {
        var marker = e.layer,
            feature = marker.feature;


    });

    // Set a custom icon on each marker based on feature properties.
    myLayer.on('layeradd', function(e) {
        var marker = e.layer,
            feature = marker.feature;

        marker.setIcon(L.icon(feature.properties.icon));
    });


    // Add features to the map
    myLayer.setGeoJSON(geoJson);

   	</script>

<?php include 'includes/global/footer.php'; ?>