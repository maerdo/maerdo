	
$(document).ready(function() {
	maerdo.Load('Utils');
	maerdo.Load('Form');
	maerdo.Load('Controller');
	
	maerdo.Utils.setInputMask("#form_name",/^[a-z]{1,}$/);
	
	$('#formSaveStep1').click(function() {
			maerdo.Form.SaveStep1();			
	});
	
	$('#form_module').change(function() {
		$("#form_controller").removeOption(/./);
		module_id=$('#form_module').val();
		$("#form_controller").ajaxAddOption('/maerdo/ajax/controller/getListByModuleId/module_id='+module_id);
	});	
});