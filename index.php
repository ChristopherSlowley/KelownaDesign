<?php
  require_once "basesettings.php";
  require BASE_LOCATIONS['PHP_SEGMENTS']."page_header.php";
  require BASE_LOCATIONS['PHP_SEGMENTS']."menu_bar.php";
?>
  <body>
      <div class="row">
          <div id="left-sidebar" class="col-sm-2">
            <!-- Left side bar-->  
          </div>
          <div id="main-area" class="col-sm-8">
              <!-- Center section -->
              
				<div class="row">
					<section class="col-sm-6 col-md-6 col-lg-6 outputSection">
						<header><a target="new" href="http://www.backayaadshipping.com">Back-A-Yaad Freight Shipping</a></header>
						<span>Shipping to the caribbean and beyond</span>
						<br/>
					</section>
					<section class="col-sm-6 col-md-6 col-lg-6 outputSection"> 
						<header><a target ="new" href="http://www.primerica.com/michelleslowleypollack">Michelle Slowley - Primerica Agent</a></header>
						<span>Financial Needs Analysis, Term Life Insurance and Investments</span>
						<br/>
					</section>
				</div>	             
             
            <h1>Future home of something quite cool.</h1>
            <p class="lead"><strong>site owner</strong>, <a href="/cpanel">log in</a> to launch this site</p>
            <p class="lead"><strong>visitor </strong><a href="/blog">blog</a></p>
            </div>
            <div id="right-sidebar" class="col-sm-2">
                <!-- Right sidebar -->
            	<?php
                	printf("<p>Host Name : %s</p>" , DB_SETTINGS['HOST_NAME']);
                	printf("<p>Database Name : %s</p>" , DB_SETTINGS['DATABASE_NAME']);
                	printf("<p>Absolute Root Location : %s</p>" , BASE_SETTINGS['ABSOLUTE_ROOT_LOCATION']);
            	?>
            </div>
      </div>
      <button id='getmenuoptionsBTN' onclick='Menus.getMainMenuOptions(<?php echo '"'.BASE_URLS['PHP_SCRIPTS'].'"' ?>)'>Setup main menu</button>
    <script>
      // var jq = $.noConflict();
      // jq(document).ready(function(){
      //     jq(".connectionButton").click(function(){
      //         jq("p").text("jQuery is still working!");
      //     });
      // });
    </script>
  </body>
  <?php
  require "php/segments/page_footer.php";
?>