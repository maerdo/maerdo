function Maerdo_Page() {
	
	this.addPage=function() { 
		var valid=true;

		if($('#page_module_id').val()==null || $('#page_module_id').val()=="null") {
			valid=false;
			$('#form_error_page_module_id').show();
		} else {
			$('#form_error_page_module_id').hide();
		}
		
		if($('#page_controller_id').val()==null || $('#page_controller_id').val()=="null") {
			valid=false;
			$('#form_error_page_controller_id').show();
		} else {
			$('#form_error_page_controller_id').hide();
		}
		if($('#page_action_id').val()==null || $('#page_action_id').val()=="null") {
			valid=false;
			$('#form_error_page_action_id').show();
		} else {
			$('#form_error_page_action_id').hide();
		}
		if($('#page_url').val()=="") {
			valid=false;
			$('#form_error_page_url').show();
		} else {
			$('#form_error_page_url').hide();
		}
		if($('#page_name').val()=="") {
			valid=false;
			$('#form_error_page_name').show();
		} else {
			$('#form_error_page_name').hide();
		}
		if($('#page_description').val()=="") {
			valid=false;
			$('#form_error_page_description').show();
		} else {
			$('#form_error_page_description').hide();
		}
		
		
		url=$('#page_url').val();
		while (url.search("/") != -1) 
			   url = url.replace("/","!");
		$.ajax({			
			  url: "/maerdo/ajax/page/checkURL/url="+url,
			  context: document.body,
			  async:false,
			  success: function(data){
			    if(data=="0") {
			    	$('#form_error_page_url_alreadyexist').hide();
			    } else {
			    	valid=false;
			    	$('#form_error_page_url_alreadyexist').show();				    
			    }
			  }
			});		

		$.ajax({			
			  url: "/maerdo/ajax/page/checkname/name="+$('#page_name').val(),
			  context: document.body,
			  async:false,
			  success: function(data){
			    if(data=="0") {
			    	$('#form_error_page_name_alreadyexist').hide();
			    } else {
			    	valid=false;
			    	$('#form_error_page_name_alreadyexist').show();				    
			    }
			  }
			});				
		
		if(valid==true) {
			$('#form_page_error').fadeOut();
			$('#form_page_add').submit();
		} else {
			$('#form_page_error').show();
		}							
	}
	
	this.updatePage=function() {
			var valid=true;
			
			if($('#page_controller_id').val()==null) {
				valid=false;
				$('#form_error_page_controller_id').show();
			} else {
				$('#form_error_page_controller_id').hide();
			}
			if($('#page_action_id').val()==null) {
				valid=false;
				$('#form_error_page_action_id').show();
			} else {
				$('#form_error_page_action_id').hide();
			}
			if($('#page_url').val()=="") {
				valid=false;
				$('#form_error_page_url').show();
			} else {
				$('#form_error_page_url').hide();
			}
			if($('#page_name').val()=="") {
				valid=false;
				$('#form_error_page_name').show();
			} else {
				$('#form_error_page_name').hide();
			}
			if($('#page_description').val()=="") {
				valid=false;
				$('#form_error_page_description').show();
			} else {
				$('#form_error_page_description').hide();
			}
			
			
			url=$('#page_url').val();
			if(url!=$('#page_db_url').val()) {
				while (url.search("/") != -1) 
					   url = url.replace("/","!");
				$.ajax({			
					  url: "/maerdo/ajax/page/checkURL/url="+url,
					  context: document.body,
					  async:false,
					  success: function(data){
					    if(data=="0") {
					    	$('#form_error_page_url_alreadyexist').hide();
					    } else {
					    	valid=false;
					    	$('#form_error_page_url_alreadyexist').show();				    
					    }
					  }
					});		
			}	
			
			if($('#page_name').val()!=$('#page_db_name').val()) {
				$.ajax({			
					  url: "/maerdo/ajax/page/checkname/name="+$('#page_name').val(),
					  context: document.body,
					  async:false,
					  success: function(data){
					    if(data=="0") {
					    	$('#form_error_page_name_alreadyexist').hide();
					    } else {
					    	valid=false;
					    	$('#form_error_page_name_alreadyexist').show();				    
					    }
					  }
					});				
			}
			
			if(valid==true) {
				$('#form_page_error').fadeOut();
				$('#form_page_update').submit();
			} else {
				$('#form_page_error').show();
			}							
	}
	
	
	
	
	
	
	this.addTitle=function() {
		var row_id=$('#page_title_row_id').val();
		row_id=Math.floor(parseInt(row_id)+1);
		$('#page_title_row_id').val(row_id)
		var row="<tr id='table_title_row_"+row_id+"'>";				
		
		var locale=$('#page_heads_title_locale').val();
		var language=$("#page_heads_title_locale option:selected").text();
		$("#page_heads_title_locale").removeOption(locale); 
		
		
		row=row+"<td><input value='"+locale+"' type='hidden' id='title_"+row_id+"_locale' name='title["+row_id+"][locale]' />"+language+"</td>";
		row=row+"<td><input class='px400' value='' type='text' name='title["+row_id+"][title]' /></td>";
		row=row+"<td><img onclick='deleteTitle("+row_id+")' class='pr t3' src='/images/icons/delete.gif' alt='Delete' /></td>";
		row=row+"</tr>";	
		
		$('#table_title').append(row);
	}
	
	this.deleteTitle=function(row_id) {
		var locale=$('#title_'+row_id+'_locale').val();		
		$.ajax({
			  url: "/maerdo/ajax/page/getLocaleName/locale="+locale,
			  async:false,
			  context: document.body,
			  success: function(language_name){					
					$("#page_heads_title_locale").addOption(locale,language_name, false);
					$('#table_title_row_'+row_id).remove();	    
			  }
		});	
	}
	
	
	
	this.addMeta=function() {

		var row_id=$('#page_meta_row_id').val();
		row_id=Math.floor(parseInt(row_id)+1);
		$('#page_meta_row_id').val(row_id)
		var row="<tr id='table_meta_row_"+row_id+"'>";				
		
		var locale=$('#page_heads_metattag_locale').val();
		var language=$("#page_heads_metattag_locale option:selected").text();
		$("#page_heads_metattag_locale").removeOption(locale); 
		
		var metatag=$('#page_heads_metatag_tag').val();
		var page_id=$('#page_id').val();
		
		$.ajax({
			  url: "/maerdo/ajax/page/addmeta/locale="+locale+'&meta='+metatag+'&page_id='+page_id,
			  async:false,			  
		});		

		row=row+"<td class='vtop'><input id='meta_"+row_id+"_locale' value='"+locale+"' type='hidden' id='title_"+row_id+"_locale' name='meta["+row_id+"][locale]' />"+language+"</td>";
		row=row+"<td class='vtop'><input id='meta_"+row_id+"_metatag' class='px400' value='"+metatag+"' type='hidden' name='meta["+row_id+"][meta]' />"+metatag+"</td>";		
		row=row+"<td class='vtop'><textarea rows='4' class='px250' type='text' name='meta["+row_id+"][value]' /></textarea></td>";
		row=row+"<td class='vtop'><img onclick='deleteMeta("+row_id+")' class='pr t3' src='/images/icons/delete.gif' alt='Delete' /></td>";
		row=row+"</tr>";	
		
		$('#table_meta').append(row);
	}
	
	this.deleteMeta=function(row_id) {
		var locale=$('#meta_'+row_id+'_locale').val();	
		var metatag=$('#meta_'+row_id+'_metatag').val();
		var page_id=$('#page_id').val();
		$.ajax({
			  url: "/maerdo/ajax/page/deletemeta/locale="+locale+'&meta='+metatag+'&page_id='+page_id,
			  async:false,			  
		});		
		$("#page_heads_metatag_tag").val(metatag);
		$("#page_heads_metattag_locale").removeOption(/./);	
		$("#page_heads_metattag_locale").ajaxAddOption('/maerdo/ajax/page/getmetafreelocal/meta='+metatag+'&page_id='+page_id,{},false);
		$('#table_meta_row_'+row_id).remove();	    			 		
	}
	
	this.addCss=function() {
		var row_id=$('#page_css_row_id').val();
		row_id=Math.floor(parseInt(row_id)+1);
		$('#page_css_row_id').val(row_id)
		var row="<tr >";	
		
		var row="<tr id='table_css_row_"+row_id+"'>";
		row=row+"<td class='vtop'><input id='table_css_row_identifiant_"+row_id+"' class='px150' type='text' name='css["+row_id+"][identifiant]' /></td>";
		row=row+"<td class='vtop'><input class='px600' type='text' name='css["+row_id+"][file]' /></td>";
		row=row+"<td class='vtop'><img onclick='deleteCss("+row_id+")' class='pr t3' src='/images/icons/delete.gif' alt='Delete' /></td>";
		row=row+"</tr>";
		
		$('#table_css').append(row);
		maerdo.Utils.setInputMask("#table_css_row_identifiant_"+row_id,/^[a-z0-9]{1,}$/);
	}
	
	this.addJavascript=function() {
		var row_id=$('#page_javascript_row_id').val();
		row_id=Math.floor(parseInt(row_id)+1);
		$('#page_javascript_row_id').val(row_id)
		var row="<tr >";	
		
		var row="<tr id='table_javascript_row_"+row_id+"'>";
		row=row+"<td class='vtop'><input id='table_javascript_row_identifiant_"+row_id+"' class='px150' type='text' name='javascript["+row_id+"][identifiant]' /></td>";
		row=row+"<td class='vtop'><input class='px600' type='text' name='javascript["+row_id+"][file]' /></td>";
		row=row+"<td class='vtop'><img onclick='deleteJavascript("+row_id+")' class='pr t3' src='/images/icons/delete.gif' alt='Delete' /></td>";
		row=row+"</tr>";
		
		$('#table_javascript').append(row);
		maerdo.Utils.setInputMask("#table_javascript_row_identifiant_"+row_id,/^[a-z0-9]{1,}$/);

	}

	this.deleteCss=function(row_id) {
		$('#table_css_row_'+row_id).remove();
	}
	
	this.deleteJavascript=function(row_id) {		
		$('#table_javascript_row_'+row_id).remove();
	}
}
