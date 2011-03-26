$(document).ready(function() {
	
	$( "#tabs" ).tabs();
	
	this.addOption = function() {
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
	
	this.deleteOption = function(row_id) {
		var option=$('#option_'+row_id).val();
		var myOptions = { option: option}
		$("#validator_option").addOption(myOptions, false);
		
		$('#table_option_'+row_id).remove();
	}
	
	$('#img_validator_submit_form').click(function() {
		$('#form_validators').submit();
	});
});	