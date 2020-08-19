/***************************************************************************************
* @author:    Christopher Slowley
* @date:      April 1, 2018
* @purpose:   Namespace that stores all the Java Script Menu related functions 
***************************************************************************************/

(function( Menus, $, undefined ) {

   // ********************************* Private Properties ****************************
   var phpScriptPath = "";

/**
 * Public functions 
 */

  Menus.getMainMenuOptions = function( path ) {
    phpScriptPath = path + 'get_menu_options.php';  
    $.get(phpScriptPath,{menuLevel:0,parentMenuId:0},function(jsonObjStr){

      var $mainMenuDIV = $("#mainmenubar");

   	if (jsonObjStr.includes("Error")) 
   	{
        	$mainMenuDIV.append("<span id='mainmenu>"+ jsonObjStr +"</span>");
			alert("Error found " + jsonObjStr);
   	}
		else
   	{
      	var jsonObj = JSON.parse(jsonObjStr);
      	var menuOptionsArray = jsonObj.menuOptions;
      	var optionsCount = menuOptionsArray.length;
      
      	for(var idx = 0; idx < menuOptionsArray.length - 1; idx++)
      	{
        		var theLink =    menuOptionsArray[idx].menuLink;
        		var menuId =     menuOptionsArray[idx].menuId;
        		var hasSubMenu = menuOptionsArray[idx].hasSubMenu;
        		//TODO: CES put code (that Rob showed you to limit the number of times a\a javascript event is called)
        		//TODO: to prevent the item frombeing added to the memu more than once
         	//TODO:Also there is a problem with the submenu option getting mixed up wiht each other's options
          	//TODO: need to findout what  is causing that to happen.
        		$mainMenuDIV.append("<span id='mainmenu"+ menuId +"' onmouseover='Menus.getSubmenuFor(" + menuId + "," + hasSubMenu + ")'><a href='"+ theLink + "' >" + menuOptionsArray[idx].menuName + "</a></span>");
      	}
   	}
	  });
  }


  Menus.getSubmenuFor = function( theParentMenuId, hasSubMenu ) {
    var $subMenuDIV = $("#submenubarlevel1");
    var $subMenuArea = $(".menuoptionsarea");

    $subMenuDIV.html("");
    $subMenuArea.html("");

    if(hasSubMenu){
      $.get(phpScriptPath,{menuLevel:1,parentMenuId:theParentMenuId},function(jsonObjStr){
        var jsonObj = JSON.parse(jsonObjStr);
        var menuOptionsArray = jsonObj.menuOptions;
        var optionsCount = menuOptionsArray.length;
        var mainMenuId = "mainmenu"+theParentMenuId;
        var geometrics = GUIUtil.getGeometrics(mainMenuId);

         //TODO: convert this function into a recursive one so the here can be different levels of menus.
         //      have to pass the level as input to the function adding one to each level when called
         //Need to fine tune the Main menu item span size and positioning so that the submenus can line up properly.
         $subMenuArea.css({
            "left":(geometrics.left),
            "top":(geometrics.bottom)
         });

        for(var idx = 0; idx < menuOptionsArray.length - 1; idx++)
         {
            var theLink =    menuOptionsArray[idx].menuLink;
            var menuId =     menuOptionsArray[idx].menuId;
            var hasSubMenu = menuOptionsArray[idx].hasSubMenu;
         //          $subMenuArea.append("<tr><td class='menuoption' onmouseover='getSubmenuFor(" + menuId + "," + hasSubMenu + ")'><a href='"+ theLink + "' >" + menuOptionsArray[idx].menuName + "</a></td></tr>");
            $subMenuArea.append("<tr><td class='menuoption' onmouseover=''><a href='"+ theLink + "' >" + menuOptionsArray[idx].menuName + "</a></td></tr>");
         }
         $subMenuDIV.show(500);
         $subMenuArea.show();
      });
   }
}

/**
* Private functions
*/

//TODO: Code imported from the Jira tracking system at work!

function createPopupMenu(menuOptionsObjArray, xPos, yPos, menuId, menuTitle) {
    var menuArea;

    $("#"+menuId).remove(); //remove previous intance of the popomenu from the document

    //set the defualt values for each incomming argument
    if(menuId === undefined || menuId === ""){
      menuId = "PopMenu";
      var $newDiv = $("<div>").attr("id",menuId);
      $("body").append($newDiv);
    }

    if(!menuOptionsObjArray || menuOptionsObjArray == null){
      menuOptionsObjArray = [ {href:"#",descriptor:"Empty"}, {href:"#",descriptor:"Empty"}];
    }

    //create the table structure for the popupmenu
    $menuArea = $("<div>").attr({
      "id": menuId  
    });
   
    $menuOptionsTable =  $("<table>").attr( {
        "id":"menuOptionsTable", 
        "class":"menuoptionstable",
      });

    $menuOptionsTable.css({
        "left":(xPos-5),
        "top":(yPos-5)
    });
  
        
    //if there a menu title was specified then create a table header row with specified title
    if( !(menuTitle === undefined || menuTitle === "")){
      var $menuOptionsTableRow = $("<tr>");
      var $newHeader = $("<th>").html(menuTitle);
      $menuOptionsTableRow.append($newHeader);
      $menuOptionsTable.append($menuOptionsTableRow);
    }

   
   for(var idx =0 ; idx <= menuOptionsObjArray.length-1; idx++){ 
      var $menuOptionsTableRow = $("<tr>");
      var $menuoption = $("<td>");
      $menuoption.attr ({
        "id": ("menuoption-" + (idx+1)),
        "class":"menuoption" 
      });

      var $href =  menuOptionsObjArray[idx].href;
      var $descriptor = menuOptionsObjArray[idx].descriptor;
            
      var link =  $("<a>");
      link.attr({"href": ""+$href,
                 "target": "_blank" }
                 );
      link.html($descriptor);
      
      $menuoption.append(link);      
      $menuOptionsTableRow.append( $menuoption);   
      $menuOptionsTable.append($menuOptionsTableRow);  
    }//end for loop

    $menuArea.append($menuOptionsTable);
    $menuArea.mouseleave(function(){
      $(this).hide();
    });

    return $menuArea;
}

}( window.Menus = window.Menus || {}, jQuery ));