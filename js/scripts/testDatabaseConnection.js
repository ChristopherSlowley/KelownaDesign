 /**
 * 
 */
  function getMainMenuOptions()
  {
    alert("Message from the frontend");
    var type = "";
    $.get('php/scripts/get_mainmenu_options.php',{result_type:type},function(result){
          alert(result);
      });

  	$.get('php/scripts/get_mainmenu_options.php',{menuLevel:1},function(jsonObjStr){
    var jsonObj = JSON.parse(jsonObjStr); 
		var menuOptionsArray = jsonObj.menuOptions;
    var optionsCount = menuOptionsArray.length;
		var $menuOptionsDIV = $("#menuOptions");
    
    for(var idx = 0; idx < menuOptionsArray.length - 1; idx++)
		{
			$menuOptionsDIV.append("<p>" + menuOptionsArray[idx].optionId + "</p>");
		}
	});

  }


function getDatabaseConnection()
{
   return "connection successful";
   var message = "";
    $.get('php/scripts/connectToKelownaDesignsDB.php',function(result){
          message = result;
      });
   return message;
}