	
$(document).ready(function() {
	maerdo.Load('Utils');
	maerdo.Load('Page');
	
	maerdo.Utils.setInputMask("#page_name",/^[a-z0-9]{1,}$/);
	maerdo.Utils.setInputMask("#page_url",/^[a-z0-9A-Z\:\_\-.\/]{1,}$/);
	maerdo.Utils.setInputMask(".maskalpha",/^[a-z0-9]{1,}$/);
	
	$('#img_add_title').click(function() {
		maerdo.Page.addTitle();
	});

	 
	this.deleteTitle=function(row_id) {
		maerdo.Page.deleteTitle(row_id);	
	}
	
	
	$('#img_add_meta').click(function() {
		maerdo.Page.addMeta();
	});	
	
	this.deleteMeta=function(row_id) {
		maerdo.Page.deleteMeta(row_id);		
	}	
	
	
	$('#page_heads_metatag_tag').change(function() {
		var meta=$('#page_heads_metatag_tag').val();
		var page_id=$('#page_id').val();
		$("#page_heads_metattag_locale").removeOption(/./);
		$("#page_heads_metattag_locale").ajaxAddOption('/maerdo/ajax/page/getmetafreelocal/meta='+meta+'&page_id='+page_id,{},false);
	});
	

	
	$('#page_module_id').change(function() {
		$("#page_controller_id").removeOption(/./);
		$("#page_action_id").removeOption(/./);
		module_id=$('#page_module_id').val();		
		$("#page_controller_id").ajaxAddOption('/maerdo/ajax/controller/getListByModuleId/module_id='+module_id,{},false);
	});
	
	$('#page_controller_id').change(function() {
		$("#page_action_id").removeOption(/./);
		controller_id=$('#page_controller_id').val();
		$("#page_action_id").ajaxAddOption('/maerdo/ajax/action/getListByControllerId/controller_id='+controller_id,{},false);
	});	
	
	$(function() {
	    $( "#tabsheads" ).tabs();
	});
	
	$(function() {
	    $( "#tabsmeta" ).tabs();
	});
	
	 this.updatePage=function() {
		 maerdo.Page.updatePage();
	 }
	 
	 this.updateTitle=function() {
		 $('#form_page_update_title').submit()
	 }
	 this.updateMeta=function() {
		 $('#form_page_update_meta').submit()
	 }	 
	 
	 
	 $('#img_update_javascript').click(function() {
		 $('#form_page_update_javascript').submit();
	 });
	
	 this.addJavascript=function() {
		 maerdo.Page.addJavascript();
	 }
	 
	 this.addCss=function() {
		 maerdo.Page.addCss();
	 }
	 
	 this.deleteCss=function(row_id) {
		 maerdo.Page.deleteCss(row_id);
	 }
	 
	 this.deleteJavascript=function(row_id) {
		 maerdo.Page.deleteJavascript(row_id);
	 }	 
	 
	 $('#img_update_css').click(function() {
		 $('#form_page_update_css').submit();
	 });	 
	 
	 this.updateACL=function() {
		 $('#form_page_update_acl').submit();
	 }		 
	 
	this.updateNavigation=function() {
		$('#form_page_update_navigation').submit();	
	}
});