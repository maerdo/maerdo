$(document).ready(function() {
	
	maerdo.Load('Utils');
	maerdo.Load('Components/Auth');
	
	maerdo.Utils.setInputMask("#auth_table",/^[a-z0-9]{1,}$/);
	maerdo.Utils.setInputMask("#auth_username_field",/^[a-z0-9]{1,}$/);
	maerdo.Utils.setInputMask("#auth_password_field",/^[a-z0-9]{1,}$/);
	maerdo.Utils.setInputMask("#auth_role_field",/^[a-z0-9]{1,}$/);
	maerdo.Utils.setInputMask(".auth_url",/^[a-z0-9A-Z\:\_\-.\/]{1,}$/);
	
	
	$('#select_module').change(function() {
		document.location.href='/maerdo/component/auth?module_id='+$('#select_module').val();
	});
	
	$('#img_submit_form').click(function() {
		if(maerdo.components.auth.checkForm()==true) {
			$('#form_auth').submit();
		}	
	});	
		
});	