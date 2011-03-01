$(document).ready(function() {

	maerdo.Load('Components/Database');
	maerdo.Load('Utils');
	
	maerdo.Utils.setInputMask("#database_hostname",/^[a-zA-Z0-9\.]{1,}$/);
	maerdo.Utils.setInputMask("#database_database",/^[a-zA-Z0-9\_]{1,}$/);
	maerdo.Utils.setInputMask("#database_username",/^[a-zA-Z0-9]{1,}$/);
	maerdo.Utils.setInputMask("#database_name",/^[a-zA-Z0-9]{1,}$/);
	
	
	$('#selectModule').change(function() {
		document.location.href='/maerdo/component/database/?module_id='+$('#selectModule').val();
	});
	
	$('#img_submit_form').click(function() {
		maerdo.components.database.checkForm();
	});
});	