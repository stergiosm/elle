jQuery(document).ready(function($) {

  $(document).on('click', '.ap-font-group li', function(){
	   	$('.ap-font-group li').removeClass();
	    $(this).addClass('selected');
	    var aa = $(this).parents('#ap-font-awesome-list').find('.ap-font-group li.selected').children('i').attr('class');
   	$(this).parents('#ap-font-awesome-list').siblings('p').find('.hidden-icon-input').val(aa);
   	$(this).parents('#ap-font-awesome-list').siblings('p').find('.icon-receiver').html('<i class="'+aa+'"></i>');
	    return false;
  });


  /*Sticky user note  */
     $('#accordion-panel-general_setting').prepend(
         '<div class="user_sticky_note">'+
         '<span class="sticky_info_row"><a class="button" href="http://demo.accesspressthemes.com/accesspress-store/" target="_blank">Live Demo</a>'+
         '<span class="sticky_info_row"><a class="button" href="http://doc.accesspressthemes.com/accespress-store-doc/" target="_blank">Documentation</a></span>'+
         '<span class="sticky_info_row"><a class="button" href="https://accesspressthemes.com/support/forum/themes/free-themes/theme-accesspress-store/" target="_blnak">Support Forum</a></span>'+
         '<span class="sticky_info_row"><a class="button" href="support@accesspressthemes.com">support@accesspressthemes.com<a/></span>'+
         '</div>'
         );  
    
    $('.switch_options').each(function() {
        //This object
        var obj = $(this);

        var enb = obj.children('.switch_enable'); //cache first element, this is equal to ON
        var dsb = obj.children('.switch_disable'); //cache first element, this is equal to OFF
        var input = obj.children('input'); //cache the element where we must set the value
        var input_val = obj.children('input').val(); //cache the element where we must set the value

        /* Check selected */
        if (0 == input_val) {
            dsb.addClass('selected');
        }
        else if (1 == input_val) {
            enb.addClass('selected');
        }

        //Action on user's click(ON)
        enb.on('click', function() {
            $(dsb).removeClass('selected'); //remove "selected" from other elements in this object class(OFF)
            $(this).addClass('selected'); //add "selected" to the element which was just clicked in this object class(ON) 
            $(input).val(1).change(); //Finally change the value to 1
        });

        //Action on user's click(OFF)
        dsb.on('click', function() {
            $(enb).removeClass('selected'); //remove "selected" from other elements in this object class(ON)
            $(this).addClass('selected'); //add "selected" to the element which was just clicked in this object class(OFF) 
            $(input).val(0).change(); // //Finally change the value to 0
        });

    });
});