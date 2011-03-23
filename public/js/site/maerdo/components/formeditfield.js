$(document).ready(function() {
	
	maerdo.Load('Components/Forms');

	$( "#tabs" ).tabs();

	
	$('#img_options_submit_form').click(function() {
		$('#options_form').submit();
	});
	
	
	this.addMultiOptions = function() {
		maerdo.components.forms.addMultiOptions();
	}	
	
	this.addAttributs = function() {
		maerdo.components.forms.addAttributs();
	}
});	