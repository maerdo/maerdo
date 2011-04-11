$(document).ready(function() {
	
	maerdo.Load('Components/Forms');
	
	$('#selectModule').change(function() {
		document.location.href='/maerdo/component/translate/?module_id='+$('#selectModule').val();
	});
	
	$('#img_add_submit_form').click(function() {
		if(maerdo.components.forms.checkForm()==true) {
			$('#form').submit();
		}
	});
	
	$('#img_add_field_submit_form').click(function() {
		if(maerdo.components.forms.checkFieldForm()==true) {
			$('#form_add_field').submit();
		} 
	});
	

});	