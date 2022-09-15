 /**
 * 
 */

function getSubmenuFor (MenuID)
{
  alert("Hovering over menu : " + MenuId);
}

function test (val)
{
  alert("Test");
}

  function getMainMenuOptions()
  {
  	$.get('php/scripts/get_mainmenu_options.php',{menuLevel:0,parentMenuId:0},function(jsonObjStr){
      var jsonObj = JSON.parse(jsonObjStr); 
      var menuOptionsArray = jsonObj.menuOptions;
      var optionsCount = menuOptionsArray.length;
      var $mainmenuDIV = $("#mainmenubar");
      
      for(var idx = 0; idx < menuOptionsArray.length - 1; idx++)
      {
        var theLink =  menuOptionsArray[idx].menuLink;
        var menuId = menuOptionsArray[idx].menuId;  

//        $mainmenuDIV.append("<span onmouseover='getSubmenuFor(" + menuId + ")'><a href='"+ theLink + "' >" + menuOptionsArray[idx].menuName + "</a></div>");
  
//        $mainmenuDIV.append("<span onmouseover='test(" + menuId + ")'><a href='"+ theLink + "' >" + menuOptionsArray[idx].menuName + "</a></div>");

        $mainmenuDIV.append("<span onmouseover='alert(" + menuId + ")'><a href='"+ theLink + "' >" + menuOptionsArray[idx].menuName + "</a></div>");

        if(menuOptionsArray[idx].hasSubMenu){

        }
      }
	});
} 

