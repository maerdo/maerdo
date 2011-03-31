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
	
	this.addValidatorOption = function() {
		var option=$('#validator_option').val();
		var row_id=parseInt($('#table_option tr').length+1);
		
		var row ="<tr id='table_option_"+row_id+"'>";
		if(option=="other") {
			row = row + "<td class='px200'><input type='text' name='option["+row_id+"][option]' value='' /></td>";
		} else {
			row = row + "<td class='px200'><input type='hidden' id='option_"+row_id+"' name='option["+row_id+"][option]' value='"+option+"' />"+option+"</td>";
		}
		row = row + "<td class='px300'><input type='text' class='px300' name='option["+row_id+"][value]' value='' /></td>";
		row = row + "<td><a href='#table_option' onclick='deleteOption("+row_id+")'><img class='pr t3' src='/images/icons/delete.gif' /></a></td>";
		row = row + "</tr>";
		
		if(option!="other") {
			$("#validator_option").removeOption(option);
		}
		
		$('#table_option').append(row);
	}
	
	this.deleteValidatorOption = function(row_id) {
		var validator_id = $('#validator_id').val();	
		var option = $('#option_'+row_id).val();
		$.ajax({
			  url: "/maerdo/ajax/forms/validatoroptionexist/validator_id="+validator_id+"&option="+option,
			  context: document.body,
			  success: function(result){
			    if(result==1) {				    	
					var myOptions = { option: option}
					$("#validator_option").addOption(myOptions, false);
			    }
			  }
			});				
		$('#table_option_'+row_id).remove();
	}
}