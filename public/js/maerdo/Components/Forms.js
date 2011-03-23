this.Maerdo_Components_Forms=function() {
	
	this.addMultiOptions = function() {
		
		var row_id=$('#multioptions tr').length;
		var row='<tr><td><input type="text" name="multioptions['+row_id+'][name]" /></td><td><input type="text" name="multioptions['+row_id+'][value]" /></td></tr>'
		
		$('#multioptions').append(row);		
	}
	
	this.addAttributs = function() {
		
		var row_id=$('#attributs tr').length;
		var row='<tr><td><input type="text" name="attributs['+row_id+'][name]" /></td><td><input type="text" name="attributs['+row_id+'][value]" /></td></tr>'
		
		$('#attributs').append(row);		
	}	
}