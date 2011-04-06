$(document).ready(function() {
		
	$( "#tabs" ).tabs();
	maerdo.Load('Components/Forms');
	
	this.addOption = function() {
		maerdo.components.forms.addFilterOption();
	}
	
	this.deleteOption = function(row_id) {
		maerdo.components.forms.deleteFilterOption(row_id);		
	}
	
	$('#img_filter_submit_form').click(function() {
		$('#form_filters').submit();
	});
		
});	