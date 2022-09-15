//Author: Christopher E. Slowley

function AjaxUtil() {
}

AjaxUtil.prototype.getView = function(viewType, view) {
    this.viewPath = '/html/views/'+viewType+"/"+view;
    alert("Getting view " + this.viewPath);
    var html;
//    $.ajax({
//        type: "POST",
//        url: this.viewPath,
//        dataType: "html",
//        data: {},
//        success: function(result){
//          //alert( "$ajax: success:" + JSON.stringify(result,null,4) );
//          html = result;
//          //return result;
//        },
//        fail: function(){
//            alert ("Ajax: failed to get " + source);
//        }
//    });
    
    return new Promise((resolve,reject) => { 
        $.ajax({
            type: "POST",
            url: this.viewPath,
            dataType: "html",
            data: {},
            success: function(result){
              //alert( "$ajax: success:" + JSON.stringify(result,null,4) );
              html = result;
              resolve(result);
            },
            fail: function(){
                reject("Ajax: failed to get " + source);
            }
        });
    })
    //return html;
};



