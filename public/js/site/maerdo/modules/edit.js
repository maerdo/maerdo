$(document).ready(function() {
	 
	 maerdo.Load('Module');
	 maerdo.Load('Utils');

	 maerdo.Utils.setInputMask("#controller_name",/^[a-z]{1,}$/);
	 maerdo.Utils.setInputMask("#action_name",/^[a-z]{1,}$/);
	 
	 this.showControllerForm=function() {
		 $(function() {
			    $( "#dialog-addController" ).dialog();
		 });	 
	 }
	 
	 this.showActionForm=function() {
		 $(function() {
			    $( "#dialog-addAction" ).dialog();
		 });	 
	 }	 

	 this.addAction=function() {
		 maerdo.Module.addAction();
	 }
	 
	 this.addController=function() {
		 maerdo.Module.addController();
	 }	 
});