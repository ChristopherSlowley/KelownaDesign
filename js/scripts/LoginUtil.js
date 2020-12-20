/***************************************************************************************
* @author:    Christopher Slowley
* @date:      June 10, 2017
* @purpose:   Namespace that stores all the Java Script Login Utility functions
* 
* This is a 'self-executing anonymous function' also called an
* IIFE (Immediately Invoked Function Expression) 
***************************************************************************************/

(function( LoginUtil, $, undefined ) {

    // ********************************* Private Properties ****************************

    // ********************************* Public Properties ****************************

    // ********************************* Private Methods ****************************


    // ********************************* Public Methods ****************************
    LoginUtil.getGeometrics = function(elementId) {
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

    LoginUtil.getLoginForm = function()
    {
        $.ajax({
            type: "POST",
            url: "html/forms/form.login.html",
            data: "",
            success: function(data){
                phpResult = data;
                $('#login-form-div').html(phpResult).hide().slideDown(500);
            }
        });
    }

    LoginUtil.processLoginForm = function()
    {
        var email = $('#email');
        var password = $('#password');
        var formResponse = $('#login-form-div-response'); 
        var formDiv = $('#login-form-div');

        if(password.val() == "abc")
        {
            formResponse.html("Success").show().hide(2000);
            //alert("Success");
            formDiv.html("Welcome");
            $('#main-content-area').toggle();
            return true;
        }
        else
        {
            formResponse.html("Fail").show().hide(2000);
           return false;
           //alert("Fail");
        }
    }

}( window.LoginUtil = window.LoginUtil || {}, jQuery ));
