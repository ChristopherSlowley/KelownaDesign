<?php
  require_once $_SERVER['DOCUMENT_ROOT']."/websites/KelownaDesigns.com-April2017/public_html/"."basesettings.php";
  require BASE_LOCATIONS['PHP_SEGMENTS']."page_header.php";
  require BASE_LOCATIONS['PHP_SEGMENTS']."menu_bar.php";
?>
<body>
   <div class="container text-center" id="error">
      <div class="row">
         <div class="col-sm-6">
            <h1>SITE SETTINGS</h1>
         </div>
         <div class="col-sm-6">
            <h1>Values</h1>
               <?php
                  printf("<p>Database Host/Location: %s</p>" , DB_SETTINGS['HOST_NAME']);
                  printf("<p>Site's root file location: %s</p>" , BASE_SETTINGS['ABSOLUTE_ROOT_LOCATION']);
                  printf("<p>Site's root : %s</p>" , BASE_SETTINGS['ABSOLUTE_ROOT_URL']);
                  printf("<p>Database Name: %s</p>" , DB_SETTINGS['DATABASE_NAME']);
                  printf("<p>Menu Options Table Name: %s</p>" , DB_SETTINGS['MENU_OPTIONS_TABLE_NAME']);
						printf("Public Folder global: %s ", $GLOBALS["publicFolder"]."basesettings.php");               
               ?>
         </div>
      </div>
   </div>
</body>
<?php
  require BASE_LOCATIONS['PHP_SEGMENTS']."page_footer.php";
?>