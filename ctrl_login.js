jQuery(document).ready(function() {

/*
* Thanx to:
* http://www.gmarwaha.com/blog/2009/06/16/ctrl-key-combination-simple-jquery-plugin/
*/

jQuery.ctrl = function(key, callback, args) {
    jQuery(document).keydown(function(e) {
        if(!args) args=[]; // IE barks when args is null
        if(e.keyCode == key.charCodeAt(0) && e.ctrlKey) {
            callback.apply(this, args);
            return false;
        }
    });	
};

});