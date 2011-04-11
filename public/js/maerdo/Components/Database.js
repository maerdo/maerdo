this.Maerdo_Components_Database=function() {
	this.checkForm = function() {

		var valid=true;
		
		if($('#database_name').val()=='') {
			valid=false;
			$('#form_database_error').show();
			$('#form_error_database_name').show();
		} else {
			$('#form_error_database_name').hide();
		}		
		
		if($('#database_hostname').val()=='') {
			valid=false;
			$('#form_database_error').show();
			$('#form_error_database_hostname').show();
		} else {
			$('#form_error_database_hostname').hide();
		}

		if($('#database_database').val()=='') {
			valid=false;
			$('#form_database_error').show();
			$('#form_error_database_database').show();
		} else {
			$('#form_error_database_database').hide();
		}	
		
		if($('#database_username').val()=='') {
			valid=false;
			$('#form_database_error').show();
			$('#form_error_database_username').show();
		} else {
			$('#form_error_database_username').hide();
		}	
		
		if($('#database_password').val()=='') {
			valid=false;
			$('#form_database_error').show();
			$('#form_error_database_password').show();
		} else {
			$('#form_error_database_password').hide();
		}	
		
		if(valid==true) {
			$('#form_database_error').fadeOut();
			$('#form_database_update').submit();
		} else {
			$('#form_database_error').show();
		}			
	}
	
	this.checkmoduleform=function() {
		$('#form_module_error').addClass('hidden');
		if($('#form_module_id').val()!=undefined && $('#form_module_id').val()!=null && $('#form_module_id').val()!="" && $('#form_module_id').val()!="null") {
			if($('#form_database_id').val()!=undefined && $('#form_database_id').val()!=null && $('#form_database_id').val()!="" && $('#form_database_id').val()!="null") {
				return true;
			} else {
				$('#form_module_error').removeClass('hidden');
				$('#form_module_error').addClass('dtablecell');
				return false;
			}
		} else {
			$('#form_module_error').removeClass('hidden');
			$('#form_module_error').attr('dtablecell');
			return false;
		}
		
	}
}