function Maerdo_Module() {
	
	this.addController=function() { 
		var valid=true;
		
		if($('#controller_name').val()=="") {
			valid=false;
			$('#form_error_controller_name').show();
		} else {
			$('#form_error_controller_name').hide();			
		}
		if(valid==true) {
			$('#form_controller_error').fadeOut();
			$('#form_controller_add').submit();
		} else {
			$('#form_controller_error').show();
		}							
	}

	this.addAction=function() { 
		var valid=true;
		if($('#action_name').val()=="") {
			valid=false;
			$('#form_error_action_name').show();
		} else {
			$('#form_error_action_name').hide();			
		}
		if(valid==true) {
			$('#form_action_error').fadeOut();
			$('#form_action_add').submit();
		} else {
			$('#form_action_error').show();
		}		 
	}
	
	this.addModule=function() { 
		var valid=true;
		if($('#module_name').val()=="") {
			valid=false;
			$('#form_error_module_name').show();
		} else {
			$('#form_error_module_name').hide();			
		}
		if(valid==true) {
			$('#form_module_error').fadeOut();
			$('#form_module_add').submit();
		} else {
			$('#form_module_error').show();
		}		 
	}	
}
