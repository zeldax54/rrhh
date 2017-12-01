(function ($) {
$(document).ready(function(){
	
	

	$('.textid').each(function(e){		
		var div=$(this).closest('.node');
		var id= div.attr('id').replace('node-','');
		//$(this).val(id);		
		$(this).attr('value',id);		
	});

	

   
   
   });

})(jQuery);



