$(document).ready(function() {
	
	maerdo.Load('Components/Forms');
	
	$('#selectModule').change(function() {
		document.location.href='/maerdo/component/translate/?module_id='+$('#selectModule').val();
	});
	
	$('#img_add_submit_form').click(function() {
		$('#form_add').submit();
	});
});	