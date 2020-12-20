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

    /**
     * 
     * @returns {Boolean}
     * @author Christopher E. Slowley
     */
    LoginUtil.processLoginForm = function()
    {
        var email = $('#email');
        var password = $('#password');
        var formResponse = $('#login-form-div-response'); 
        var formDiv = $('#login-form-div');

        if(password.val() == "abc")
        {
            formResponse.html("Success").show().hide(2000);
            formDiv.html("Welcome");
            GUIUtil.updateView($('#main-area'),"html/views/view-client-sites.html");
            $('#login-form-div').toggle();
            $('#login-button').toggle();
            
            return true;    
        }
        else
        {
            formResponse.html("Fail").show().hide(2000);
            return false;
        }
    }

}( window.LoginUtil = window.LoginUtil || {}, jQuery ));
