<?php
  require_once "basesettings.php";
  require PAGE_SEGMENTS['PAGE_HEADER'];
  require PAGE_SEGMENTS['MENU_BAR'];
?>
  <body>
  	<div class="row">
		<h1>Kelowna Designs</h1>
  	</div>
      <div class="row">
          <div id="left-sidebar" class="col-sm-2">
            <!-- Left side bar-->  
          </div>
          <div id="main-area" class="col-sm-8">
              <!-- Center section -->

				<!-- First row of tiles  -->               
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
				        
				<!-- Second Row of tiles -->
				<div class="row">
					<section class="col-sm-6 col-md-6 col-lg-6 outputSection">
						<header><a target="new" href="/cpanel">Site Owner Log in</a></header>
						<span>Control Panel</span>
						<br/>
					</section>
					<section class="col-sm-6 col-md-6 col-lg-6 outputSection"> 
						<header><a target ="new" href="/blog">Blog</a></header>
						<span>Kelowna Design Blog</span>
						<br/>
					</section>
				</div>	     
            </div> <!-- End Main-Area div -->
            <div id="right-sidebar" class="col-sm-2">
                <!-- Right sidebar -->
                <table class="enhancedTable_type1">
            	<?php
                	printf("<tr><td>Host Name</td><td>%s</td></tr>" , DB_SETTINGS['HOST_NAME']);
                	printf("<tr><td>Database Name</td><td>%s</td></tr>" , DB_SETTINGS['DATABASE_NAME']);
                	printf("<tr><td>Absolute Root Location</td><td>%s</td></tr>" , BASE_SETTINGS['ABSOLUTE_ROOT_LOCATION']);
            	?>
            	</table>
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
    require PAGE_SEGMENTS['PAGE_FOOTER'];
?>