	
$(document).ready(function() {
	 
	maerdo.Load('Page');
	maerdo.Load('Utils');
	 
	maerdo.Utils.setInputMask("#page_name",/^[a-z0-9]{1,}$/);
	maerdo.Utils.setInputMask("#page_url",/^[a-z0-9A-Z\:\_\-.\/]{1,}$/);
	
	$('#page_module_id').change(function() {		
		$("#page_controller_id").removeOption(/./);
		$("#page_action_id").removeOption(/./);
		$("#page_controller_id").addOption("null","-----");
		$("#page_action_id").addOption("null","-----");
		module_id=$('#page_module_id').val();		
		$("#page_controller_id").ajaxAddOption('/maerdo/ajax/controller/getListByModuleId/module_id='+module_id,{},false);

	});
	
	$('#module').change(function() {
		var module_id=$('#module').val();
		$("#controller").removeOption(/./);	
		$("#controller").addOption("all","All");		
		$("#controller").ajaxAddOption('/maerdo/ajax/controller/getListByModuleId/module_id='+module_id,{},false);

	});	
	
	$('#page_controller_id').change(function() {
		$("#page_action_id").removeOption(/./);
		$("#page_action_id").addOption("null","-----");		
		controller_id=$('#page_controller_id').val();
		$("#page_action_id").ajaxAddOption('/maerdo/ajax/action/getListByControllerId/controller_id='+controller_id,{},false);
	});	
	
	this.showPageForm=function() {
		 $('#page_module_id').val("null");
		 $('#page_controller_id').val("null");
		 $('#page_action_id').val("null");		
		 $(function() {
			    $( "#dialog-addPage" ).dialog({width:'400px'});
		 });	 
	 }			
	
	 this.addPage=function() {
		 maerdo.Page.addPage();
	 }	
});