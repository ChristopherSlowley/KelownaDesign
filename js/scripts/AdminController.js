/***************************************************************************************
* @author:    Christopher Slowley
* @date:      June 10, 2017
* @purpose:   Namespace that stores all the Java Script GUI Utility functions
*
* This is a 'self-executing anonymous function' also called an
* IIFE (Immediately Invoked Function Expression) 
***************************************************************************************/

(function( Admin, $, undefined ) {

   // ********************************* Private Properties ****************************
   var PI = 3.142;

   // ********************************* Public Properties ****************************
   Admin.LAST_MENU_LEVEL = 2;
   Admin.TOP_MENU_LEVEL = 0;

   // ********************************* Public Methods ****************************

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
//    Admin.displayAllUsers = function(target)
    Admin.displayAllUsers = async function(target)
    {
        var  ajaxUtil = new AjaxUtil();
        var userData = getAllUserInfo();
        
        try {
            var html = await ajaxUtil.getView('admin','view-all-users.html');
            console.log( "displayAllUsers() - userData: " + JSON.stringify(userData,null,4) );
             $(target).html(html);
             var usersTableBody = $("#main-area").find('#users-table-body');
             var templateRow = usersTableBody.find('#user-template-row');
             for(var idx=0; idx <= userData.length-1; idx++){
                var newRow = templateRow.clone();
                newRow.css({'display':'table-row'});
                newRow.attr('id',userData[idx].user_id);
                newRow.find('.user-id-td').html(userData[idx].user_id);
                newRow.find('.user-name-td').html(userData[idx].user_firstname + ' ' + userData[idx].user_lastname);
                newRow.find('.user-password-td').html(userData[idx].user_password);
                newRow.find('.user-email-td').html(userData[idx].user_email);
                newRow.find('.user-type-td').html(userData[idx].user_type);
                usersTableBody.append(newRow);
            }
            $('.edit-user-button').click(function(){
                let userId = $(this).parents('tr').attr('id');
                alert("User id: " + userId);
            });
            
        } catch (error) {
            console.log(error);
        }
    };

    // ********************************* Private Methods ****************************

    /**
     * 
     * @returns {unresolved}
     */
    function getAllUserInfo()
    {
        var userData;
        $.ajax({
            type: "POST",
            url: "php/scripts/get_user_information.php",
            async:false, 
            data: { 
                    'function':'getAllUsers',
                    'data': {}
            },
            success: function(phpResult){
                //alert("phpResult: "+phpResult);
                userData = (JSON.parse(phpResult));
            },
            fail: function(){
                console.log('Failed to getUserInformation from the backend');
            }
        }); 
        return userData;
    }

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
    
}( window.Admin = window.Admin || {}, jQuery ));

