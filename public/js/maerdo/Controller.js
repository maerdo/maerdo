function Maerdo_Controller() {
	
	this.getListByModuleId = function (module_id) {
		$.ajax({
			  url: '/maerdo/ajax/controller/getListByModuleId/?module_id='+module_id,
			  success: function(result) {
			   	return($result);
			  }
			});
	}
}