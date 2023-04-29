;(function($){
    'use strict';

    jQuery(function() {
        jQuery('.class2').hide();
    });

    jQuery('table').each(function(i,item){
        jQuery('.table'+i+' tr:first').addClass('active');
        jQuery('.table'+i+' tr:nth-child(1)').addClass('active');
        jQuery('.table'+i+' tr:nth-child(2)').addClass('active');
        jQuery('a.load_more'+i).on('click', function(e) {
        e.preventDefault();
        var rows = jQuery('.table'+i+' tr');
        console.log(rows.length);
        var totalRowCount = jQuery('.table'+i+' tr').length-2;
        var lastActiveIndex = rows.filter('.active:last').index();
    
        for(var j=0; j<rows.length; j++){
                jQuery('.table'+i+' tr').addClass('active');
        }
    
        var totalRowCount = jQuery('.table'+i+' tr').length-1;
            if(totalRowCount==rows.length-1)
            {
                jQuery('a.load_more'+i).hide();
                jQuery('a.load_more1'+i).show();
            }
        });

    
        jQuery('a.load_more1'+i).on('click', function(e) {
            e.preventDefault();
            var rows = jQuery('.table'+i+' tr');
            var totalRowCount = jQuery('.table'+i+' tr').length-2;
            var lastActiveIndex = rows.filter('.active:last').index();
            
            var secondlast=rows.length-1;
            var firstlast=rows.length-2;
    
            for(var j=0; j<rows.length; j++){
            var weghalen = rows.length - rows.length + 3; 
            jQuery('.table'+i+' tr:nth-child(1n'+weghalen+')').removeClass('active');
        }

        jQuery('a.load_more'+i).show();
            jQuery('a.load_more1'+i).hide();
        });


    
    });


})(jQuery); // End of use strict