<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<?php include("Ressource/ArrayLien.php");
	  include("Ressource/ArrayNom.php");?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foundation 5</title>

  <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/foundation.css">

  <!-- If you are using the gem version, you need this only -->
  <link rel="stylesheet" href="css/app.css">

  <script src="js/vendor/modernizr.js"></script>
  <script src="js/jquery-1.11.0.min.js"></script>
</head>
<body>
	    <!-- Navigation -->
 
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <!-- Title Area -->
      <li class="name">
        <h1>
          <a href="index.php">
            Groupe Paquet
          </a>
        </h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
    </ul>
 
    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        <li class="divider"></li>
        <li>
          <a href="<?php echo $lienMenu['accueil']; ?>"><?php echo $nomMenu['accueil']; ?></a>
        </li>
        <li class="divider"></li>
        <li><a href="<?php echo $lienMenu['demandeEmploi']; ?>"><?php echo $nomMenu['demandeEmploi']; ?></a></li>
        <li class="divider"></li>
        <li>
          <a href="<?php echo $lienMenu['demandeCommandite']; ?>"><?php echo $nomMenu['demandeCommandite']; ?></a>
        </li>
      </ul>
    </section>
  </nav>
 
  <!-- End Top Bar -->
 
  <div class="row">
    <div class="large-10 columns">
 
    <!-- Content Slider -->
 
      <div class="row">
        <div class="large-10 hide-for-small">
 
          <div id="featured" data-orbit data-options="animation:slide;
                  animation_speed:1000;
                  pause_on_hover:false;
                  animation_speed:500;
                  navigation_arrows:true;
                  bullets:true;">
              <img src="http://placehold.it/1200x200&text=Slide Image 1" alt="slide image">
              <img src="http://placehold.it/1200x200&text=Slide Image 2" alt="slide image">
              <img src="http://placehold.it/1200x200&text=Slide Image 3" alt="slide image">
            </div>
 
      </div>
    </div>
 
    <!-- End Content Slider -->
 
    <!-- Mobile Header -->
 
      <div class="row">
        <div class="large-12 columns show-for-small">
 
          <img src="http://placehold.it/1200x900&text=Mobile Header">
 
        </div>
      </div><br>
 
    <!-- End Mobile Header -->
 
 
      <div class="row">
        <div class="large-12 columns">
          <div class="row">
            <!-- Shows -->
            <!-- End Shows -->
 
 

				<a href="<?php echo $lien['paquetnissan']; ?>">
					<div id="cons1" class="large-2 columns panel">
					  <h4><?php echo $nom['paquetnissan']; ?></h4>
					  <img src="http://placehold.it/300x400&text=Image">
					  <p>Hacque adfabilitate confisus cum eadem postridie feceris, ut incognitus haerebis et repentinus, hortatore illo hesterno clientes numerando, qui sis vel unde venias diutius ambigente agnitus vero tandem et adscitus in amicitiam si te salutandi adsiduitati dederis triennio indiscretus et per tot dierum defueris tempus, reverteris ad paria perferenda, nec ubi esses interrogatus et quo tandem miser discesseris, aetatem omnem frustra in stipite conteres summittendo. </p>
					</div>
				</a>
				
				<a href="<?php echo $lien['paquetmitsubishi']; ?>">
					<div id="cons2" class="large-2 columns panel">
					  <h4><?php echo $nom['paquetmitsubishi']; ?></h4>
					  <img src="http://placehold.it/300x400&text=Image">
					  <p>Hacque adfabilitate confisus cum eadem postridie feceris, ut incognitus haerebis et repentinus, hortatore illo hesterno clientes numerando, qui sis vel unde venias diutius ambigente agnitus vero tandem et adscitus in amicitiam si te salutandi adsiduitati dederis triennio indiscretus et per tot dierum defueris tempus, reverteris ad paria perferenda, nec ubi esses interrogatus et quo tandem miser discesseris, aetatem omnem frustra in stipite conteres summittendo. </p>
					</div>
					
				<a href="<?php echo $lien['montmagnynissan']; ?>">
					<div id="cons3" class="large-2 columns panel">
					  <h4><?php echo $nom['montmagnynissan']; ?></h4>
					  <img src="http://placehold.it/300x400&text=Image">
					  <p>Hacque adfabilitate confisus cum eadem postridie feceris, ut incognitus haerebis et repentinus, hortatore illo hesterno clientes numerando, qui sis vel unde venias diutius ambigente agnitus vero tandem et adscitus in amicitiam si te salutandi adsiduitati dederis triennio indiscretus et per tot dierum defueris tempus, reverteris ad paria perferenda, nec ubi esses interrogatus et quo tandem miser discesseris, aetatem omnem frustra in stipite conteres summittendo. </p>
					</div>
				</a>
					
				<a href="<?php echo $lien['kiamontmagny']; ?>">
					<div id="cons4" class="large-2 columns panel">
					  <h4><?php echo $nom['kiamontmagny']; ?></h4>
					  <img src="http://placehold.it/300x400&text=Image">
					  <p>Hacque adfabilitate confisus cum eadem postridie feceris, ut incognitus haerebis et repentinus, hortatore illo hesterno clientes numerando, qui sis vel unde venias diutius ambigente agnitus vero tandem et adscitus in amicitiam si te salutandi adsiduitati dederis triennio indiscretus et per tot dierum defueris tempus, reverteris ad paria perferenda, nec ubi esses interrogatus et quo tandem miser discesseris, aetatem omnem frustra in stipite conteres summittendo. </p>
					</div>
				</a>	
					
				<a href="<?php echo $lien['pneuspaquetlevis']; ?>">
					<div id="cons5" class="large-2 columns panel">
					  <h4><?php echo $nom['pneuspaquetlevis']; ?></h4>
					  <img src="http://placehold.it/300x400&text=Image">
					  <p>Hacque adfabilitate confisus cum eadem postridie feceris, ut incognitus haerebis et repentinus, hortatore illo hesterno clientes numerando, qui sis vel unde venias diutius ambigente agnitus vero tandem et adscitus in amicitiam si te salutandi adsiduitati dederis triennio indiscretus et per tot dierum defueris tempus, reverteris ad paria perferenda, nec ubi esses interrogatus et quo tandem miser discesseris, aetatem omnem frustra in stipite conteres summittendo. </p>
					</div>
				</a>
           </div>
        </div>
      </div>
 
    <!-- End Content -->

 
    <!-- Footer -->
 
      <footer class="row">
        <div class="large-12 columns"><hr>
            <div class="row">
 
              <div class="large-6 columns">
                  <p>© Copyright Groupe Paquet</p>
              </div>
 
            </div>
        </div>
      </footer>
 
    <!-- End Footer -->
 
    </div>
  </div>
 
  <script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
<!-- End Footer -->
    

  <!-- body content here -->

  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>


<script>

for(var i = 1; i <= 5; i++) 
{
	
	test(i);
}

function test(i) {
	$( "#cons"+ i)
	  .mouseover(function() {
			$("#cons"+i).css("background-color","#919191");
	  })
	  .mouseout(function() {
			$("#cons"+i.toString()).css("background-color","#f2f2f2");
	  });
}






</script>
 
