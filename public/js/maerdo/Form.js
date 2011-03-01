function Maerdo_Form() {
	
	this.SaveStep1 = function () {
				
		var valid=true;
		
		if($('#form_name').val()=="") {
			valid=false;
			$('#form_error_name').show();
		} else {
			$('#form_error_name').hide();
		}	
		if($('#form_description').val()=="") {
			valid=false;
			$('#form_error_description').show();
		} else {
			$('#form_error_description').hide();
		}			
		
		if($('#form_controller').val()==null) {
			valid=false;
			$('#form_error_controller').show();
		} else {
			$('#form_error_controller').hide();
		}
		
		if(valid==true) {
			$('#form_error').fadeOut();
			$('#form_forms_add').submit();
		} else {
			$('#form_error').show();
		}
	}
}