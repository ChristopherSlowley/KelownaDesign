/***************************************************************************************
* @author:    Christopher Slowley
* @date:      June 10, 2017
* @purpose:   Namespace that stores all the Java Script GUI Utility functions
***************************************************************************************/

(function( GUIUtil, $, undefined ) {

   // ********************************* Private Properties ****************************
   var PI = 3.142;

   // ********************************* Public Properties ****************************
   GUIUtil.LAST_MENU_LEVEL = 2;
   GUIUtil.TOP_MENU_LEVEL = 0;

   // ********************************* Public Methods ****************************
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


    // ********************************* Private Methods ****************************

   function findHorizontalMid ( geometrics ) {
      return geometrics.x + geometrics.width/2;
   }


   function findVerticalMid ( geometrics ) {
      return geometrics.top + geometrics.height/2;
   }

}( window.GUIUtil = window.GUIUtil || {}, jQuery ));
