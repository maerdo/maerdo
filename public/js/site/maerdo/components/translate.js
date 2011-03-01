$(document).ready(function() {
	
	maerdo.Load('Components/Translate');
	
	$('#selectModule').change(function() {
		document.location.href='/maerdo/component/translate/?module_id='+$('#selectModule').val();
	});
	
	this.addTranslation=function() {
		var row_id=$('#translate_row_id').val();

		var row_id=parseInt(row_id)+1;
		$('#translate_row_id').val(row_id);
		if(row_id%2==0) {
			var className="bggreylight";
		} else {
			var className="";
		}
		var row='<tr class="'+className+'" id="table_translate_row_'+row_id+'">';
		var row=row+'<td><input type="text" class="field px50" name="translate['+row_id+'][identifiant]" /></td>';
		var row=row+'<td><input type="text" class="field px50" name="translate['+row_id+'][locale]" /></td>';
		var row=row+'<td><input type="text" class="field " name="translate['+row_id+'][language_name]" /></td>';
		var row=row+'<td><input type="radio" name="translate[default]" value="'+row_id+'" /></td>';
		var row=row+'<td><a href="#" onclick="deleteLanguage('+row_id+')"><img src="/images/icons/delete.gif" /></a></td>';
		var row=row+'</tr>';
		$('#table_language').append(row);
	}
	
	$('#img_submit_form').click(function() {
		maerdo.components.translate.checkForm();
	});
	
	this.deleteLanguage=function(row_id) {
		$('#table_translate_row_'+row_id).remove();
	}
});	