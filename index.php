<?php
  require_once "basesettings.php";
  require BASE_LOCATIONS['PHP_SEGMENTS']."page_header.php";
  require BASE_LOCATIONS['PHP_SEGMENTS']."menu_bar.php";
  
//  require "php/segments/page_header.php";
//  require "php/segments/menu_bar.php";
?>
  <body>
    <div class="container text-center" id="error">

      <svg height="100" width="100">
        <circle cx="50" cy="50" r="31" stroke="#679b08" stroke-width="9.5" fill="none" />
        <circle cx="50" cy="50" r="6" stroke="#679b08" stroke-width="1" fill="#679b08" />
        <line x1="50" y1="50" x2="35" y2="50" style="stroke:#679b08;stroke-width:6" />
        <line x1="65" y1="35" x2="50" y2="50" style="stroke:#679b08;stroke-width:6" />
        <path d="M59 65 L83 65 L75 87 Z" fill="#679b08" />
        <rect width="20" height="9" x="70" y="56" style="fill:#eee;stroke-width:0;" />
      </svg>
      <div class="row">
        <div class="col-sm-10">
          <div class="main-icon text-success"><span class="uxicon uxicon-clock-refresh"></span></div>
          <h1>Future home of something quite cool.</h1>
          <p class="lead"><strong>site owner</strong>, <a href="/cpanel">log in</a> to launch this site</p>
          <p class="lead"><strong>visitor </strong><a href="/blog">blog</a></p>
        </div>
        <div class="col-sm-2">
         <?php
           printf("<p>Database Name : %s</p>" , DB_SETTINGS['HOST_NAME']);
            printf("<p>Database Name : %s</p>" , DB_SETTINGS['DATABASE_NAME']);
               echo "<h3> This is it</h3>";
         ?>
        </div>
      </div>
      <button id='getmenuoptionsBTN' onclick='Menus.getMainMenuOptions(<?php echo '"'.BASE_URLS['PHP_SCRIPTS'].'"' ?>)'>Setup main menu</button>
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
  require "php/segments/page_footer.php";
?>