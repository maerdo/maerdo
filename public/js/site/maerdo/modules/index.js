$(document).ready(function() {	 

	 maerdo.Load('Module');
	 maerdo.Load('Utils');

	 maerdo.Utils.setInputMask("#module_name",/^[a-z]{1,}$/);	
	
	 this.showModuleForm=function() {
		 $(function() {
			    $( "#dialog-addModule" ).dialog();
		 });	 
	 }		
	
	this.addModule=function() {
		 maerdo.Module.addModule();
	}
});	