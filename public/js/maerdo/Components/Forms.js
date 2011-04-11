this.Maerdo_Components_Forms=function() {
	
	this.checkFieldForm = function() {
		var error="0";
		
		if($('#field_type').val()=="" || $('#field_type').val()==undefined || $('#field_type').val()==null) {
			error="1";
		}		

		if($('#field_name').val()=="") {
			error="1";
		}	

		if(error=="1") {
			$('#form_field_error').removeClass('hidden');
			$('#form_field_error').addClass('dtablecell');
			return false;
		} else {
			return true;
		}			
	}
	
	this.checkForm = function() {
		var error="0";
		
		if($('#form_name').val()=="") {
			error="1";
		}

		if($('#form_template').val()=="" || $('#form_template').val()==undefined || $('#form_template').val()==null) {
			error="1";
		}		

		if($('#form_actionurl').val()=="") {
			error="1";
		}				
				
		if(error=="1") {
			$('#form_error').removeClass('hidden');
			$('#form_error').addClass('dtablecell');
			return false;
		} else {
			return true;
		}	
	}
	
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
					$("#validator_option").addOption(option,option, false);
			    }
			  }
			});				
		$('#table_option_'+row_id).remove();
	}
	
	this.addFilterOption = function() {
		var option=$('#filter_option').val();
		var row_id=parseInt($('#table_option tr').length+1);
		
		var row ="<tr id='table_option_"+row_id+"'>";
		if(option=="other") {
			row = row + "<td class='px200'><input type='text' id='option_"+row_id+"' name='option["+row_id+"][option]' value='' /></td>";
		} else {
			row = row + "<td class='px200'><input type='hidden' id='option_"+row_id+"' name='option["+row_id+"][option]' value='"+option+"' />"+option+"</td>";
		}
		row = row + "<td class='px300'><input type='text' class='px300' name='option["+row_id+"][value]' value='' /></td>";
		row = row + "<td><a href='#table_option' onclick='deleteOption("+row_id+")'><img class='pr t3' src='/images/icons/delete.gif' /></a></td>";
		row = row + "</tr>";
		
		if(option!="other") {
			$("#filter_option").removeOption(option);
		}
		
		$('#table_option').append(row);
	}
	
	this.deleteFilterOption = function(row_id) {
		var filter_id = $('#filter_id').val();	
		var option = $('#option_'+row_id).val();
		$.ajax({
			  url: "/maerdo/ajax/forms/filteroptionexist/filter_id="+filter_id+"&option="+option,
			  context: document.body,
			  success: function(result){
			    if(result==1) {					
					$("#filter_option").addOption(option,option, false);
			    }
			  }
			});				
		$('#table_option_'+row_id).remove();
	}	
}