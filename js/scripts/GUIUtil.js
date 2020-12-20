/***************************************************************************************
* @author:    Christopher Slowley
* @date:      June 10, 2017
* @purpose:   Namespace that stores all the Java Script GUI Utility functions
*
* This is a 'self-executing anonymous function' also called an
* IIFE (Immediately Invoked Function Expression) 
***************************************************************************************/

(function( GUIUtil, $, undefined ) {

   // ********************************* Private Properties ****************************
   var PI = 3.142;

   // ********************************* Public Properties ****************************
   GUIUtil.LAST_MENU_LEVEL = 2;
   GUIUtil.TOP_MENU_LEVEL = 0;

   // ********************************* Public Methods ****************************
   
   /**
    * Gets the horizontal mid point and vertical mid point of the specified 
    * HTML element. 
    * 
    * @param {type} elementId
    * @returns {GUIUtilL#10.GUIUtil.getGeometrics.geometrics}
    */
   GUIUtil.getGeometrics = function(elementId) {
      if( elementId ){

         var theElement = document.getElementById(elementId);
         if (theElement){
            // geometrics is a DOMRect object with eight properties: left, top, right, bottom, x, y, width, height
            var geometrics = theElement.getBoundingClientRect();
            //  var geometrics2 = $("#"+mainMenuId)[0].getBoundingClientRect();
            //  var geometrics3 = $("#"+mainMenuId).get(0).getBoundingClientRect();

            geometrics.horizontalMid = findHorizontalMid(geometrics);
            geometrics.verticalMid = findVerticalMid (geometrics);
            return geometrics;
         }
      }
      return null;
   };
    
    /**
     * Updates targeted dom obj usng the source view file.
     * 
     * Uses JQuery's short-handed $.ajax form called $.get
     * to retrieve a file from server and then use it to fill
     * the html() component of the targeted DOM element.
     * 
     * @param {type} target - jQuery dom reference
     * @param {type} source - url of the view to load
     * @returns {undefined} - none
     * 
     * @author Christpher E Slowley
     */
    GUIUtil.updateView = function(target, source )
    {
        var data ="";
        var jqxhr = 
        $.get( source, data,function(view) {
            target.html(view);
            console.log( "GUIUtil.updateView: success:" + view);
        })
        .done(function() {
         // console.log( "GUIUtil.updateView: second success" );
        })
        .fail(function() {
          console.log( "GUIUtil.updateView: error" );
        })
        .always(function() {
         // console.log( "GUIUtil.updateView: finished" );
        });
    };

    // ********************************* Private Methods ****************************

    /**
     * Updates targeted dom obj usng the source view file.
     * 
     * Uses JQuery's $.ajax form to retrieve a file from
     * the server and then use it to fill the html() 
     * component of the targeted DOM element on the front-end.     
     *  
     * @param {type} target  JQuery selected object
     * @param {type} source
     * @param {type} data
     * @returns {undefined}
     */
    function retrieveFile(target, source, data="")
    {
        $.ajax({
            type: "POST",
            url: source,
            data: data,
            success: function(result){
               // alert( "$ajax: success:" + JSON.stringify(result,null,4) );
                target.html(result);
            },
            fail: function(){
                alert ("Ajax: failed to get " + source);
            }
        });
    }

   function findHorizontalMid ( geometrics ) {
      return geometrics.x + geometrics.width/2;
   }


   function findVerticalMid ( geometrics ) {
      return geometrics.top + geometrics.height/2;
   }


}( window.GUIUtil = window.GUIUtil || {}, jQuery ));
