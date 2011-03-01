<?php 
Class My_Class_Maerdo_Utils_Utils {
	
	static function createRandomKey($lenght){
	    $keyset = "abcdefghijklmnopqrstuvwxyz0123456789";
	    $randkey = "";
	    for ($i=0; $i<$lenght; $i++)
	   		$randkey .= substr($keyset, rand(0, strlen($keyset)-1), 1);
		return $randkey;
	}
	
	
	 static function  hexa2rgb($color) {
	    if ($color[0] == '#')
	        $color = substr($color, 1);
	
	    if (strlen($color) == 6)
	        list($r, $g, $b) = array($color[0].$color[1],
	                                 $color[2].$color[3],
	                                 $color[4].$color[5]);
	    elseif (strlen($color) == 3)
	        list($r, $g, $b) = array($color[0].$color[0], $color[1].$color[1], $color[2].$color[2]);
	    else
	        return false;
	
	    $r = hexdec($r); $g = hexdec($g); $b = hexdec($b);
	
	    return array($r, $g, $b);
	}
	
	 static function formater($txt)
	 {	 	
		 $txt=preg_replace('#[^a-zA-Z0-9]#','_',$txt);		 
		 return ($txt);
	 }	

}
