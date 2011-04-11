this.Maerdo_Components_Auth=function() {
	this.checkForm = function() {	
		var error=0;		
		if($('#auth_database_name').val()=="" || $('#auth_database_name').val()==null || $('#auth_database_name').val()==undefined) {
			error='1';
		}

		if($('#auth_table').val()=="") {
			error='1';
		}

		if($('#auth_username_field').val()=="") {
			error='1';
		}

		if($('#auth_password_field').val()=="") {
			error='1';
		}

		if($('#auth_role_field').val()=="") {
			error='1';
		}			

		$('.redirection_url').each(function(index) {
			if($(this).val()=="")
				error='1';
		});

		
		if(error=='1') {
			$('#form_error').removeClass('hidden');
			$('#form_error').addClass('dtablecell');
			return false;
		} else{
			return true;
		}	
	}
}