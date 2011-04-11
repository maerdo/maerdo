$(document).ready(function() {
	$('#cache_backend_type').change(function() {
		$('.backend_type').each(function(index) {
			  $(this).hide();
		});
		if($(this).val()=="file") {		
			$('.backend_file').each(function(index) {
				  $(this).show();
			});
		}
		if($(this).val()=="sqlite") {		
			$('.backend_sqlite').each(function(index) {
				  $(this).show();
			});
		}		
	});
	
	$('#img_add_submit').click(function() {
		if($('#cache_name').val()=="") {
			return false;
		} else {
			$("#form_cache").submit();
		}	
	});
});	