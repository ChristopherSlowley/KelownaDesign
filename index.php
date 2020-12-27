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
        <button onclick="LoginUtil.getLoginForm()" id="login-button">User login</button>
        <div id="login-form-div"></div>
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