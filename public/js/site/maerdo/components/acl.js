$(document).ready(function() {
	this.checkForm=function() {
		if($('#role').val()=="") {
			return false;
		} else {
			return true;
		}
	}
});	