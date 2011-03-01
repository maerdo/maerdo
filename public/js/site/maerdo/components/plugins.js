$(document).ready(function() {
	
	maerdo.Load('Components/Plugin');
	maerdo.Load('Utils');
	
	this.addPlugin=function() {
		maerdo.components.plugin.addPlugin();
	}
	
	this.deletePlugin=function(row_id) {
		maerdo.components.plugin.deletePlugin(row_id);
	}	
	
	this.updateStackIndex=function(plugin_name,value) {
		maerdo.components.plugin.updateStackIndex(plugin_name,value);
	}	
});	