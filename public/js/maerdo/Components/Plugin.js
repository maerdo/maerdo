this.Maerdo_Components_Plugin=function() {
	
	this.addPlugin=function() {
		var row_id=parseInt($('#plugins_row_id').val());
		$('#plugins_row_id').val(row_id+1);
				
		var plugin_name=$('#selectbox_plugin').val();
		
		$.ajax({
			  async:false,
			  url: "/maerdo/ajax/plugins/addplugin/plugin_name="+plugin_name,
			  context: document.body,
			  success: function(){

			  }
			});		
		
		
		$("#selectbox_plugin").removeOption(plugin_name);
			
		var row="<tr id='table_plugin_row_"+row_id+"'>";
		var row=row+"<td><input type='hidden' id='plugin_name_"+row_id+"' name='plugins["+row_id+"][plugin_name]' value='"+plugin_name+"' />"+plugin_name
		var row=row+"<td><select onchange='updateStackIndex(\""+plugin_name+"\",this.value)' id='plugin_stackindex_"+row_id+"' name='plugins["+row_id+"][stack_index]'></select></td>";
		var row=row+"<td><a href='#' onclick='deletePlugin("+row_id+")'><img src='/images/icons/delete.gif' /></a></td>";
		
		$("#table_plugins").append(row);
		
		$("#plugin_stackindex_"+row_id).ajaxAddOption("/maerdo/ajax/plugins/printstackindexlist", {}, false);
	}
		
	this.deletePlugin=function(row_id) {
		var plugin_name=$('#plugin_name_'+row_id).val();
		$('#table_plugin_row_'+row_id).remove();

		$.ajax({
			  url: "/maerdo/ajax/plugins/deleteplugin/plugin_name="+plugin_name,
			  context: document.body,
			  success: function(){			    
			  }
			});			
		
		
		$('#selectbox_plugin').addOption(plugin_name,plugin_name, false);
	}	
	
	this.updateStackIndex=function(plugin_name,value) {
		$.ajax({
			  url: "/maerdo/ajax/plugins/updatestackindex/plugin_name="+plugin_name+"&stackindex="+value,
			  context: document.body,
			  success: function(){			    
			  }
			});			
	}
	
}