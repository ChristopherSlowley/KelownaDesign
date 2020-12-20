<?php
  require_once "basesettings.php";
  require PAGE_SEGMENTS['PAGE_HEADER'];
  require PAGE_SEGMENTS['MENU_BAR'];
?>
  <body>
  	<div class="row">
		<h1>Kelowna Designs</h1>
  	</div>
      <div class="row" id="main-content-area">
          <div id="left-sidebar" class="col-sm-2">
            <!-- Left side bar-->  
          </div>
          <div id="main-area" class="col-sm-8">
              <!-- Center section -->

				<!-- First row of tiles  -->               
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<section class="outputSection">
							<header><a target="new" href="http://www.backayaadshipping.com">Back-A-Yaad Freight Shipping</a></header>
							<span class="subtitle">Shipping to the caribbean and beyond</span>
							<br/>
						</section>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6">
						<section class="outputSection"> 
							<header><a target="_blank" href="http://www.primerica.com/michelleslowleypollack">Michelle Slowley - Primerica Agent</a></header>
							<span class="subtitle">Financial Needs Analysis, Term Life Insurance and Investments</span>
							<br/>
						</section>
					</div>
				</div><!-- end first row -->	     
				        
				<!-- Second Row of tiles -->
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<section class="outputSection">
							<header><a target="_blank" href="/cpanel">Site Owner Log in</a></header>
							<span class="subtitle">Control Panel</span>
							<br/>
						</section>
					</div>
					<div  class="col-sm-6 col-md-6 col-lg-6">
						<section class="outputSection"> 
							<header><a target ="_blank" href="/blog">Blog</a></header>
							<span class="subtitle">Kelowna Design Blog</span>
							<br/>
						</section>
					</div>
				</div> <!-- end second row -->	
				
				<!-- Third Row of tiles -->
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<section class="outputSection">
							<header><a target="_blank" href="http://jobhunter-local.com/">Job Hunter Project</a></header>
							<span class="subtitle">Track potential job contacts</span>
							<br/>
						</section>
					</div>
					<div  class="col-sm-6 col-md-6 col-lg-6">
						<section class="outputSection"> 
							<header><a target ="_self" href="/index.php">Home</a></header>
							<span class="subtitle">Kelowna Design Home Page</span>
							<br/>
						</section>
					</div>
				</div> <!-- end third row -->	
				     
           </div> <!-- End Main-Area div -->

            <div id="right-sidebar" class="col-sm-2">
              	<!-- Right sidebar -->
               <table class="enhancedTable_type1">
            	<?php
            		/*
                	printf("<tr><td>Host Name</td><td>%s</td></tr>" , DB_SETTINGS['HOST_NAME']);
                	printf("<tr><td>Database Name</td><td>%s</td></tr>" , DB_SETTINGS['DATABASE_NAME']);
                	printf("<tr><td>Absolute Root Location</td><td>%s</td></tr>" , BASE_SETTINGS['ABSOLUTE_ROOT_LOCATION']);
                	*/
            	?>
            	</table>
            </div>
      </div>
      <hr>
      <div class="row">
      <!--	
      	<button id='getmenuoptionsBTN' onclick='Menus.getMainMenuOptions(<?php echo '"'.BASE_URLS['PHP_SCRIPTS'].'"' ?>)'>Setup main menu</button>
      -->
        <button onclick="LoginUtil.getLoginForm()">User login</button>
        <div id="login-form-div"> </div>
        <div id="login-form-div-response"></div>
      </div>
      
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