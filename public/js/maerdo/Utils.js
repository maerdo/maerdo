function Maerdo_Utils() {
	
	this.setInputMask=function (selector,mask) {
		 $(selector).regexMask(mask);
	}
}