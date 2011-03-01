<?php 
Class My_Class_Maerdo_Utils_Buttons {
	
	static function show($button,$text,$textcolor="000000",$font="arial",$fontsize='10',$icon=NULL,$pl_text=0,$pt_text=0)  {
 		 $text=utf8_decode($text);
 
		 $baserep=PUBLIC_PATH."/images/buttons/";
	 	 $generatedrep = PUBLIC_PATH."/images/buttons/generated/"; //repertoire ou se trouve les boutons
 
	 	 $button_name=$button."_".$font."_".$textcolor."_".$fontsize;
	 	 if($icon!=NULL)
	 	 	$button_name.=$icon;

	 	 
		 $nom = $generatedrep.'btn_'.$button_name.'_'.My_Class_Maerdo_Utils_Utils::formater($text).'.png';
 
		 // L'image existe, on l'affiche
		 if(is_file($nom)) {
		 	header('Content-Type: image/png');
		 	$img=ImageCreateFromPng($nom);
			Imagepng ($img);
		 } else {
 
			 // Sinon on va le créer
			 // Utilisation des ressources graphiques			 	 
			 $rep=$baserep.$button.'/';
		 	 $fond=$rep.'bg.png';
			 $taille_fond=getimagesize($fond);
			 $img_fond = ImageCreateFromPng ($fond);
 
			 $gauche=$rep.'left.png';
			 $taille_gauche=getimagesize($gauche);
			 $img_gauche = ImageCreateFromPng ($gauche);
 
			 $droite=$rep.'right.png';
			 $taille_droite=getimagesize($droite);
			 $img_droite = ImageCreateFromPng ($droite);
 
			 if($icon!=NULL) {
			 	 if($pl_text==0)
			 	 	 $pl_text=5;
				 $motif=$baserep.'../icons/'.$icon;
				 $taille_motif=getimagesize($motif);
				 $extention=explode('.',$icon);
				 switch(strtolower($extention[1])) {
				 	case "png" :$img_motif = ImageCreateFromPng ($motif);break;
				 	case "gif" :$img_motif = ImageCreateFromGif ($motif);break;
				 	case "jpeg" :$img_motif = imagecreatefromjpeg ($motif);break;
				 	case "jpeg" :$img_motif = ImageCreateFromJpeg ($motif);break;
				 }
				 
			 } else {
			 	$taille_motif=array('0','0');
			 }		
 
			 // Text Parameters			 
			 $couleurArray=My_Class_Maerdo_Utils_Utils::hexa2rgb($textcolor);			 			 
 
			 if($font==null) 
				 $font=PUBLIC_PATH.'/images/fonts/arial.ttf';
			 else	 
			 	 $font=PUBLIC_PATH.'/images/fonts/'.$font.'.ttf';
			 	 
			 // Calcul de la taille du texte
			 $textbox = imageftbbox($fontsize, 0, $font, stripslashes(trim($text)));
			 
			 // Paramêtres du bouton
			 $hauteur = $taille_fond[1];
			 $largeur = $taille_gauche[0] + $taille_motif[0] + $textbox[2] + $taille_droite[0]+$pl_text;
 
			 // Création de l'image vierge
			 $img = imageCreateTrueColor($largeur,$hauteur);
 
			 
			
			 
			 // Elémente graphiques du bouton
			 @imageCopyMerge($img, $img_fond, 0, 0, 0, 0, $largeur, $hauteur, 100);
			 @imageCopyMerge($img, $img_gauche, 0, 0, 0, 0, $taille_gauche[0], $taille_gauche[1], 100);
			 @imageCopyMerge($img, $img_droite, $largeur-$taille_droite[0], 0, 0, 0, $taille_droite[0], $taille_droite[1], 100);
			 if($icon!=null) 
			 	@imageCopyMerge($img, $img_motif, $taille_gauche[0], ($hauteur-$taille_motif[1])/2, 0, 0, $taille_motif[0], $taille_motif[1], 100);
 

			 // ajout du text
			 $textcolor = ImageColorAllocate ($img, $couleurArray[0], $couleurArray[1], $couleurArray[2]);	 			 
			 imagettftext($img, $fontsize, 0, $pl_text+$taille_gauche[0]+$taille_motif[0],($hauteur-imagefontheight(3))/2+12+$pt_text, $textcolor, $font, stripslashes(trim($text)));
		 	
			 	
			 $orange = ImageColorAllocate ($img, 255, 165, 0);
			 imagecolortransparent($img,$orange);
 
			 //Création du bouton de type btn_[motif]_[alt].png
			 header('Content-Type: image/png');
			 Imagepng ($img,$nom);
			 Imagepng ($img);
		}
	 }
}
