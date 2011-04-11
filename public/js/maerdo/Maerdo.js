function Maerdo() {
	this.Utils=null;
	this.Forms=null;
	this.components=function(){};
	
	this.Load=function(obj) {
		switch(obj) {
			case "Utils":
				if(this.Utils==null) {
					this.Utils=new Maerdo_Utils();
				}
				var obj=this.Utils;
			break;
			case "Form":
				if(this.Form==null) {
					this.Form=new Maerdo_Form();
				}
				var obj=this.Form;
			break;
			case "Controller":
				if(this.Controller==null) {
					this.Controller=new Maerdo_Controller();
				}
				var obj=this.Controller;
			break;	
			case "Module":
				if(this.Module==null) {
					this.Module=new Maerdo_Module();
				}
				var obj=this.Module;
			break;				
			case "Page":
				if(this.Module==null) {
					this.Page=new Maerdo_Page();
				}
				var obj=this.Page;
			break;
			case "Components/Database":
				if(this.components.database==null){
					this.components.database=new Maerdo_Components_Database();
				}	
				var obj=this.components.database					
			break;
			case "Components/Translate":
				if(this.components.translate==null){
					this.components.translate=new Maerdo_Components_Translate();
				}	
				var obj=this.components.translate					
			break;	
			case "Components/Plugin":
				if(this.components.plugin==null){
					this.components.plugin=new Maerdo_Components_Plugin();
				}	
				var obj=this.components.plugin					
			break;
			case "Components/Forms":
				if(this.components.forms==null){
					this.components.forms=new Maerdo_Components_Forms();
				}	
				var obj=this.components.forms				
			break;	
			case "Components/Auth":
				if(this.components.auth==null){
					this.components.auth=new Maerdo_Components_Auth();
				}	
				var obj=this.components.auth				
			break;					
		}	
		return(obj)
	}
}
maerdo=new Maerdo();