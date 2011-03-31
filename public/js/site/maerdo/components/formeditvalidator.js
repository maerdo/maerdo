$(document).ready(function() {
	
	$( "#tabs" ).tabs();
	maerdo.Load('Components/Forms');
	
	this.addOption = function() {
		maerdo.components.forms.addValidatorOption();
	}
	
	this.deleteOption = function(row_id) {
		maerdo.components.forms.deleteValidatorOption(row_id);		
	}
	
	$('#img_validator_submit_form').click(function() {
		$('#form_validators').submit();
	});
	
	$('#img_validator_message_submit_form').click(function() {
		$('#form_validators_messages').submit();
	});	
		
});	