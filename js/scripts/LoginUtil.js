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
               
        if(userName && password) {
            var userInfo = getUserInfo(userName);
            if(typeof userInfo !== 'undefined') {          
                alert("userInfo obj: "+ JSON.stringify(userInfo,null,4));
                if( password === userInfo.user_password) {
                    isValidUser = true;
                    accountType = userInfo.user_type;
                }
            }
        }
        
        var result = {isValid:isValidUser, accountType:accountType};
        return result;
    }
    
    function getUserInfo(userName)
    {
        var userData;
        $.ajax({
            type: "POST",
            //url: "php/scripts/data/TestFile.html",
            url: "php/scripts/get_user_information.php",
            async:false, 
            data: { 
                    'function':'getUserByEmail',
                    'data': {'user_email':userName,
                            'source':'login'}
            },
            success: function(phpResult){
                alert("phpResult: "+phpResult);
                userData = (JSON.parse(phpResult))[0];
            },
            fail: function(){
                alert('Failed to getUserInformation from the backend');
            }
        }); 
        return userData;
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
            _formResponse.html("<h2>Success</h2>").show().hide(2000);
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
            bootbox.alert("Failed to login!");
            bootbox.alert({
                message: "This is an alert with a callback!",
                callback: function () {
                    console.log('This was logged in the callback!');
                }
            });
            _formResponse.html("<h2>Fail</h2>").show().hide(4000);
            return false;
        }
    }

}( window.LoginUtil = window.LoginUtil || {}, jQuery ));
