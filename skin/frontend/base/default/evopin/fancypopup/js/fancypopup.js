/**
 * ShopGo FeaturedPopup version 0.0.1
 */

(function ( $ ) {
 
    $.fn.featuredpopup = function( options ) {
    	
    	switch(options) {
    		case 'show':
    			this.addClass('md-show');
    			break;
    		case 'hide':
    			this.removeClass('md-show');
    			break;
    		default:
    			//
    			break;
    	}
    	
        // 
        var settings = $.extend({
            // These are the defaults.
            
        }, options );
     
    };
 
}( jQuery ));