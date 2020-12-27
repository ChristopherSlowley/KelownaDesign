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
   /**
    * Validates if the user name password combo are correct.
    * @param {type} userName
    * @param {type} password
    * @returns {Boolean}
    * 
    * @author Christopher E. Slowley
    */
    function validateUser(userName, password)
    {
        var isValidUser = false;
        var accountType = 'user';
        alert("userName :"+ userName+ ", password: "+password);
        
        if(userName && password)
        {
            if(userName == 'admin@kelownadesigns.com' && password == 'admin')
            {
                isValidUser = true;
                accountType = 'admin';
            }
            
            if(userName == 'christopher@kelownadesigns.com' && password == '123')
            {
                isValidUser = true;
                accountType = 'user';
            }

            if(userName == 'guest@kelownadesigns.com' && password == '123')
            {
                isValidUser = true;
                accountType = 'guest';
            }
            
        }
        
        var result = {isValid:isValidUser, accountType:accountType};
        return result;
    }

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
        var _email = $('#email');
        var _password = $('#password');
        var _formResponse = $('#login-form-div-response'); 
        var _formDiv = $('#login-form-div');
        var loginViewsPath  = "html/views/landing/";
        
        var accountResult = validateUser(_email.val(),_password.val());
        //alert("accountResult:" + JSON.stringify(accountResult,null,4));
        if(accountResult.isValid)
        {
            var view = loginViewsPath+"view-normal-landing.html";
            _formResponse.html("Success").show().hide(2000);
            _formDiv.html("Welcome");
            
            switch(accountResult.accountType)
            {
                case 'admin':
                    view = loginViewsPath+"view-client-sites.html";
                break;
                
                case 'user':
                    view = loginViewsPath+"view-normal-landing.html";
                break;
                
                case 'guest':
                    view = loginViewsPath+"view-guest-landing.html";
                break;
                
                default :
            }

            GUIUtil.updateView($('#main-area'),view);
            _formDiv.toggle();
            $('#login-button').toggle();
            return true;    
        }
        else
        {
            _formResponse.html("Fail").show().hide(4000);
            return false;
        }
    }

}( window.LoginUtil = window.LoginUtil || {}, jQuery ));
