<hr/>
    <div id="mainmenubar"></div>
    <div id="submenubarlevel1" class="menuoptionsarea" ></div>
    <div id="submenubarlevel2" class="menuoptionsarea" ></div>
    <div id="submenubarlevel3" class="menuoptionsarea" ></div>
    <script>
        $( document ).ready(function() {      
        Menus.getMainMenuOptions(<?php echo '"'.BASE_URLS['PHP_SCRIPTS'].'"' ?> );
            console.log( "document loaded" );
        });
    
        $( window ).on( "load", function() {
            console.log( "window loaded" );
        });
    </script>
<hr/>

