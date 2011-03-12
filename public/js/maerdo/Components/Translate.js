this.Maerdo_Components_Translate=function() {
	this.checkForm = function() {

		valid=true;
		
		$('.field').each(function(index,value) {
			if($(value).val()=="") {
				valid=false;
				$('#form_error_translate_field').show();
			} else {
				$('#form_error_translate_field').hide();
			}
		
		})
				
		if($('#table_language tr').length>1) {
			validDefault=false;
		} else {
			validDefault=true;
		}
		$('input[name="translate[default]"]').each(function(index,value) {					
			if($(value).attr('checked')==true) {
				validDefault=true;	
			}			
		});
		
		if(validDefault==false) {
			valid=false;
			$('#form_translate_error').show();
			$('#form_error_translate_default').show();
		} else {	
			$('#form_error_translate_default').hide();		
		}
		
		if(valid==true) {
			$('#form_translate_error').fadeOut();
			$('#form_translate_update').submit();
		} else {
			$('#form_translate_error').show();
		}			
	}
	
	this.show=function() {
		alert("okok");
	}
}