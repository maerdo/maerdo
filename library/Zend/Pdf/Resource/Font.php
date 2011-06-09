<php?php
php/php*php*
php php*php Zendphp Framework
php php*
php php*php LICENSE
php php*
php php*php Thisphp sourcephp filephp isphp subjectphp tophp thephp newphp BSDphp licensephp thatphp isphp bundled
php php*php withphp thisphp packagephp inphp thephp filephp LICENSEphp.txtphp.
php php*php Itphp isphp alsophp availablephp throughphp thephp worldphp-widephp-webphp atphp thisphp URLphp:
php php*php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsd
php php*php Ifphp youphp didphp notphp receivephp aphp copyphp ofphp thephp licensephp andphp arephp unablephp to
php php*php obtainphp itphp throughphp thephp worldphp-widephp-webphp,php pleasephp sendphp anphp email
php php*php tophp licensephp@zendphp.comphp sophp wephp canphp sendphp youphp aphp copyphp immediatelyphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Fonts
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Fontphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Pdfphp_Resourcephp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Resourcephp.phpphp'php;

php/php*php*
php php*php Zendphp_Pdfphp_Font
php php*
php php*php Zendphp_Pdfphp_Fontphp classphp constantsphp arephp usedphp withinphp Zendphp_Pdfphp_Resourcephp_Font
php php*php andphp itsphp subclussesphp.
php php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Fontphp.phpphp'php;

php/php*php*
php php*php Abstractphp classphp whichphp managesphp PDFphp fontsphp.
php php*
php php*php Definesphp thephp publicphp interfacephp andphp createsphp sharedphp storagephp forphp concrete
php php*php subclassesphp whichphp arephp responsiblephp forphp generatingphp thephp fontphp'sphp information
php php*php dictionariesphp,php mappingphp charactersphp tophp glyphsphp,php andphp providingphp bothphp overallphp font
php php*php andphp glyphphp-specificphp metricphp dataphp.
php php*
php php*php Fontphp objectsphp shouldphp bephp normallyphp bephp obtainedphp fromphp thephp factoryphp methods
php php*php php{php@linkphp Zendphp_Pdfphp_Fontphp:php:fontWithNamephp}php andphp php{php@linkphp Zendphp_Pdfphp_Fontphp:php:fontWithPathphp}php.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Fonts
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Pdfphp_Resourcephp_Fontphp extendsphp Zendphp_Pdfphp_Resource
php{
php php php/php*php*php*php*php Instancephp Variablesphp php*php*php*php*php/


php php php php php/php*php*
php php php php php php*php Thephp typephp ofphp fontphp.php Usephp TYPEphp_php constantsphp definedphp inphp php{php@linkphp Zendphp_Pdfphp_Fontphp}php.
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_fontTypephp php=php Zendphp_Pdfphp_Fontphp:php:TYPEphp_UNKNOWNphp;

php php php php php/php*php*
php php php php php php*php Arrayphp containingphp descriptivephp namesphp forphp thephp fontphp.php Seephp php{php@linkphp fontNamephp(php)php}php.
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_fontNamesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Flagphp indicatingphp whetherphp orphp notphp thisphp fontphp isphp boldphp.
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_isBoldphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Flagphp indicatingphp whetherphp orphp notphp thisphp fontphp isphp italicphp.
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_isItalicphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Flagphp indicatingphp whetherphp orphp notphp thisphp fontphp isphp monospacedphp.
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_isMonospacephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Thephp positionphp belowphp thephp textphp baselinephp ofphp thephp underlinephp php(inphp glyphphp unitsphp)php.
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_underlinePositionphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Thephp thicknessphp ofphp thephp underlinephp php(inphp glyphphp unitsphp)php.
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_underlineThicknessphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Thephp positionphp abovephp thephp textphp baselinephp ofphp thephp strikethroughphp php(inphp glyphphp unitsphp)php.
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_strikePositionphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Thephp thicknessphp ofphp thephp strikethroughphp php(inphp glyphphp unitsphp)php.
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_strikeThicknessphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Numberphp ofphp glyphphp unitsphp perphp emphp.php Seephp php{php@linkphp getUnitsPerEmphp(php)php}php.
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_unitsPerEmphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Typographicalphp ascentphp.php Seephp php{php@linkphp getAscentphp(php)php}php.
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_ascentphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Typographicalphp descentphp.php Seephp php{php@linkphp getDescentphp(php)php}php.
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_descentphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Typographicalphp linephp gapphp.php Seephp php{php@linkphp getLineGapphp(php)php}php.
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_lineGapphp php=php php0php;



php php php/php*php*php*php*php Publicphp Interfacephp php*php*php*php*php/


php php php/php*php Objectphp Lifecyclephp php*php/

php php php php php/php*php*
php php php php php php*php Objectphp constructorphp.
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(newphp Zendphp_Pdfphp_Elementphp_Dictionaryphp(php)php)php;
php php php php php php php php php$thisphp-php>php_resourcephp-php>Typephp php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'Fontphp'php)php;
php php php php php}


php php php/php*php Objectphp Magicphp Methodsphp php*php/

php php php php php/php*php*
php php php php php php*php Returnsphp thephp fullphp namephp ofphp thephp fontphp inphp thephp encodingphp methodphp ofphp thephp current
php php php php php php*php localephp.php Transliteratesphp anyphp charactersphp thatphp cannotphp bephp naturally
php php php php php php*php representedphp inphp thatphp characterphp setphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getFontNamephp(Zendphp_Pdfphp_Fontphp:php:NAMEphp_FULLphp,php php'php'php,php php'php/php/TRANSLITphp'php)php;
php php php php php}


php php php/php*php Accessorsphp php*php/

php php php php php/php*php*
php php php php php php*php Returnsphp thephp typephp ofphp fontphp.
php php php php php php*
php php php php php php*php php@returnphp integerphp Onephp ofphp thephp TYPEphp_php constantsphp definedphp in
php php php php php php*php php php php{php@linkphp Zendphp_Pdfphp_Fontphp}php.
php php php php php php*php/
php php php php publicphp functionphp getFontTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_fontTypephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp specifiedphp descriptivephp namephp forphp thephp fontphp.
php php php php php php*
php php php php php php*php Thephp fontphp namephp typephp isphp usuallyphp onephp ofphp thephp followingphp:
php php php php php php*php php<ulphp>
php php php php php php*php php php<liphp>php{php@linkphp Zendphp_Pdfphp_Fontphp:php:NAMEphp_FULLphp}
php php php php php php*php php php<liphp>php{php@linkphp Zendphp_Pdfphp_Fontphp:php:NAMEphp_FAMILYphp}
php php php php php php*php php php<liphp>php{php@linkphp Zendphp_Pdfphp_Fontphp:php:NAMEphp_PREFERREDphp_FAMILYphp}
php php php php php php*php php php<liphp>php{php@linkphp Zendphp_Pdfphp_Fontphp:php:NAMEphp_STYLEphp}
php php php php php php*php php php<liphp>php{php@linkphp Zendphp_Pdfphp_Fontphp:php:NAMEphp_PREFERREDphp_STYLEphp}
php php php php php php*php php php<liphp>php{php@linkphp Zendphp_Pdfphp_Fontphp:php:NAMEphp_DESCRIPTIONphp}
php php php php php php*php php php<liphp>php{php@linkphp Zendphp_Pdfphp_Fontphp:php:NAMEphp_SAMPLEphp_TEXTphp}
php php php php php php*php php php<liphp>php{php@linkphp Zendphp_Pdfphp_Fontphp:php:NAMEphp_IDphp}
php php php php php php*php php php<liphp>php{php@linkphp Zendphp_Pdfphp_Fontphp:php:NAMEphp_VERSIONphp}
php php php php php php*php php php<liphp>php{php@linkphp Zendphp_Pdfphp_Fontphp:php:NAMEphp_POSTSCRIPTphp}
php php php php php php*php php php<liphp>php{php@linkphp Zendphp_Pdfphp_Fontphp:php:NAMEphp_CIDphp_NAMEphp}
php php php php php php*php php php<liphp>php{php@linkphp Zendphp_Pdfphp_Fontphp:php:NAMEphp_DESIGNERphp}
php php php php php php*php php php<liphp>php{php@linkphp Zendphp_Pdfphp_Fontphp:php:NAMEphp_DESIGNERphp_URLphp}
php php php php php php*php php php<liphp>php{php@linkphp Zendphp_Pdfphp_Fontphp:php:NAMEphp_MANUFACTURERphp}
php php php php php php*php php php<liphp>php{php@linkphp Zendphp_Pdfphp_Fontphp:php:NAMEphp_VENDORphp_URLphp}
php php php php php php*php php php<liphp>php{php@linkphp Zendphp_Pdfphp_Fontphp:php:NAMEphp_COPYRIGHTphp}
php php php php php php*php php php<liphp>php{php@linkphp Zendphp_Pdfphp_Fontphp:php:NAMEphp_TRADEMARKphp}
php php php php php php*php php php<liphp>php{php@linkphp Zendphp_Pdfphp_Fontphp:php:NAMEphp_LICENSEphp}
php php php php php php*php php php<liphp>php{php@linkphp Zendphp_Pdfphp_Fontphp:php:NAMEphp_LICENSEphp_URLphp}
php php php php php php*php <php/ulphp>
php php php php php php*
php php php php php php*php Notephp thatphp notphp allphp namesphp arephp availablephp forphp allphp fontsphp.php Inphp additionphp,php some
php php php php php php*php fontsphp mayphp containphp additionalphp namesphp,php whosephp indiciesphp arephp inphp thephp range
php php php php php php*php php2php5php6php tophp php3php2php7php6php7php inclusivephp,php whichphp arephp usedphp forphp certainphp fontphp layoutphp featuresphp.
php php php php php php*
php php php php php php*php Ifphp thephp preferredphp languagephp translationphp isphp notphp availablephp,php usesphp thephp first
php php php php php php*php availablephp translationphp forphp thephp namephp,php whichphp isphp usuallyphp Englishphp.
php php php php php php*
php php php php php php*php Ifphp thephp requestedphp namephp doesphp notphp existphp,php returnsphp nullphp.
php php php php php php*
php php php php php php*php Allphp namesphp arephp storedphp internallyphp asphp Unicodephp stringsphp,php usingphp UTFphp-php1php6BE
php php php php php php*php encodingphp.php Youphp mayphp optionallyphp supplyphp aphp differentphp resultingphp characterphp setphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$nameTypephp Typephp ofphp namephp requestedphp.
php php php php php php*php php@paramphp mixedphp php$languagephp Preferredphp languagephp php(stringphp)php orphp arrayphp ofphp languages
php php php php php php*php php php inphp preferredphp orderphp.php Usephp thephp ISOphp php6php3php9php standardphp php2php-letterphp languagephp codesphp.
php php php php php php*php php@paramphp stringphp php$characterSetphp php(optionalphp)php Desiredphp resultingphp characterphp setphp.
php php php php php php*php php php Youphp mayphp usephp anyphp characterphp setphp supportedphp byphp php{php@linkphp iconvphp(php)php}php;
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getFontNamephp(php$nameTypephp,php php$languagephp,php php$characterSetphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php issetphp(php$thisphp-php>php_fontNamesphp[php$nameTypephp]php)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php php$namephp php=php nullphp;
php php php php php php php php ifphp php(isphp_arrayphp(php$languagephp)php)php php{
php php php php php php php php php php php php foreachphp php(php$languagephp asphp php$codephp)php php{
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_fontNamesphp[php$nameTypephp]php[php$codephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$namephp php=php php$thisphp-php>php_fontNamesphp[php$nameTypephp]php[php$codephp]php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_fontNamesphp[php$nameTypephp]php[php$languagephp]php)php)php php{
php php php php php php php php php php php php php php php php php$namephp php=php php$thisphp-php>php_fontNamesphp[php$nameTypephp]php[php$languagephp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php/php*php Ifphp thephp preferredphp languagephp couldphp notphp bephp foundphp,php usephp whateverphp isphp firstphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$namephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$namesphp php=php php$thisphp-php>php_fontNamesphp[php$nameTypephp]php;
php php php php php php php php php php php php php$namephp php php=php resetphp(php$namesphp)php;
php php php php php php php php php}
php php php php php php php php php/php*php Convertphp thephp characterphp setphp ifphp requestedphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php(php$characterSetphp php!php=php=php nullphp)php php&php&php php(php$characterSetphp php!php=php php'UTFphp-php1php6BEphp'php)php php&php&php PHPphp_OSphp php!php=php php'AIXphp'php)php php{php php/php/php AIXphp knowsphp notphp thisphp charset
php php php php php php php php php php php php php$namephp php=php iconvphp(php'UTFphp-php1php6BEphp'php,php php$characterSetphp,php php$namephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$namephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp wholephp setphp ofphp fontphp namesphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getFontNamesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_fontNamesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp fontphp isphp boldphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isBoldphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_isBoldphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp fontphp isphp italicphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isItalicphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_isItalicphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp fontphp isphp monospacephp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isMonospacephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_isMonospacephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp suggestedphp positionphp belowphp thephp textphp baselinephp ofphp thephp underline
php php php php php php*php inphp glyphphp unitsphp.
php php php php php php*
php php php php php php*php Thisphp valuephp isphp usuallyphp negativephp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getUnderlinePositionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_underlinePositionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp suggestedphp linephp thicknessphp ofphp thephp underlinephp inphp glyphphp unitsphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getUnderlineThicknessphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_underlineThicknessphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp suggestedphp positionphp abovephp thephp textphp baselinephp ofphp the
php php php php php php*php strikethroughphp inphp glyphphp unitsphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getStrikePositionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_strikePositionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp suggestedphp linephp thicknessphp ofphp thephp strikethroughphp inphp glyphphp unitsphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getStrikeThicknessphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_strikeThicknessphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp glyphphp unitsphp perphp emphp.
php php php php php php*
php php php php php php*php Usedphp tophp convertphp glyphphp spacephp tophp userphp spacephp.php Frequentlyphp usedphp inphp conjunction
php php php php php php*php withphp php{php@linkphp widthsForGlyphsphp(php)php}php tophp calculatephp thephp withphp ofphp aphp runphp ofphp textphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getUnitsPerEmphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_unitsPerEmphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp typographicphp ascentphp inphp fontphp glyphphp unitsphp.
php php php php php php*
php php php php php php*php Thephp typographicphp ascentphp isphp thephp distancephp fromphp thephp fontphp'sphp baselinephp tophp the
php php php php php php*php topphp ofphp thephp textphp framephp.php Itphp isphp frequentlyphp usedphp tophp locatephp thephp initial
php php php php php php*php baselinephp forphp aphp paragraphphp ofphp textphp insidephp aphp givenphp rectanglephp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getAscentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_ascentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp typographicphp descentphp inphp fontphp glyphphp unitsphp.
php php php php php php*
php php php php php php*php Thephp typographicphp descentphp isphp thephp distancephp belowphp thephp fontphp'sphp baselinephp tophp the
php php php php php php*php bottomphp ofphp thephp textphp framephp.php Itphp isphp alwaysphp negativephp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getDescentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_descentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp typographicphp linephp gapphp inphp fontphp glyphphp unitsphp.
php php php php php php*
php php php php php php*php Thephp typographicphp linephp gapphp isphp thephp distancephp betweenphp thephp bottomphp ofphp thephp text
php php php php php php*php framephp ofphp onephp linephp tophp thephp topphp ofphp thephp textphp framephp ofphp thephp nextphp.php Itphp is
php php php php php php*php typicallyphp combinedphp withphp thephp typographicalphp ascentphp andphp descentphp tophp determine
php php php php php php*php thephp fontphp'sphp totalphp linephp heightphp php(orphp leadingphp)php.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getLineGapphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_lineGapphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp suggestedphp linephp heightphp php(orphp leadingphp)php inphp fontphp glyphphp unitsphp.
php php php php php php*
php php php php php php*php Thisphp valuephp isphp determinedphp byphp addingphp togetherphp thephp valuesphp ofphp thephp typographic
php php php php php php*php ascentphp,php descentphp,php andphp linephp gapphp.php Thisphp valuephp yieldsphp thephp suggestedphp line
php php php php php php*php spacingphp asphp determinedphp byphp thephp fontphp developerphp.
php php php php php php*
php php php php php php*php Itphp shouldphp bephp notedphp thatphp thisphp isphp onlyphp aphp guidelinephp;php layoutphp enginesphp will
php php php php php php*php frequentlyphp modifyphp thisphp valuephp tophp achievephp specialphp effectsphp suchphp asphp doublephp-
php php php php php php*php spacingphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getLineHeightphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_ascentphp php-php php$thisphp-php>php_descentphp php+php php$thisphp-php>php_lineGapphp;
php php php php php}


php php php/php*php Informationphp andphp Conversionphp Methodsphp php*php/

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp glyphphp numbersphp correspondingphp tophp thephp Unicodephp charactersphp.
php php php php php php*
php php php php php php*php Ifphp aphp particularphp characterphp doesnphp'tphp existphp inphp thisphp fontphp,php thephp specialphp php'missing
php php php php php php*php characterphp glyphphp'php willphp bephp substitutedphp.
php php php php php php*
php php php php php php*php Seephp alsophp php{php@linkphp glyphNumberForCharacterphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$characterCodesphp Arrayphp ofphp Unicodephp characterphp codesphp php(codephp pointsphp)php.
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp glyphphp numbersphp.
php php php php php php*php/
php php php php abstractphp publicphp functionphp glyphNumbersForCharactersphp(php$characterCodesphp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp thephp glyphphp numberphp correspondingphp tophp thephp Unicodephp characterphp.
php php php php php php*
php php php php php php*php Ifphp aphp particularphp characterphp doesnphp'tphp existphp inphp thisphp fontphp,php thephp specialphp php'missing
php php php php php php*php characterphp glyphphp'php willphp bephp substitutedphp.
php php php php php php*
php php php php php php*php Seephp alsophp php{php@linkphp glyphNumbersForCharactersphp(php)php}php whichphp isphp optimizedphp forphp bulk
php php php php php php*php operationsphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$characterCodephp Unicodephp characterphp codephp php(codephp pointphp)php.
php php php php php php*php php@returnphp integerphp Glyphphp numberphp.
php php php php php php*php/
php php php php abstractphp publicphp functionphp glyphNumberForCharacterphp(php$characterCodephp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp aphp numberphp betweenphp php0php andphp php1php inclusivephp thatphp indicatesphp thephp percentage
php php php php php php*php ofphp charactersphp inphp thephp stringphp whichphp arephp coveredphp byphp glyphsphp inphp thisphp fontphp.
php php php php php php*
php php php php php php*php Sincephp nophp onephp fontphp willphp containphp glyphsphp forphp thephp entirephp Unicodephp character
php php php php php php*php rangephp,php thisphp methodphp canphp bephp usedphp tophp helpphp locatephp aphp suitablephp fontphp whenphp the
php php php php php php*php actualphp contentsphp ofphp thephp stringphp arephp notphp knownphp.
php php php php php php*
php php php php php php*php Notephp thatphp somephp fontsphp liephp aboutphp thephp charactersphp theyphp supportphp.php Additionallyphp,
php php php php php php*php fontsphp donphp'tphp usuallyphp containphp glyphsphp forphp controlphp charactersphp suchphp asphp tabs
php php php php php php*php andphp linephp breaksphp,php sophp itphp isphp rarephp thatphp youphp willphp getphp backphp aphp fullphp php1php.php0php scorephp.
php php php php php php*php Thephp resultingphp valuephp shouldphp bephp consideredphp informationalphp onlyphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$string
php php php php php php*php php@paramphp stringphp php$charEncodingphp php(optionalphp)php Characterphp encodingphp ofphp sourcephp textphp.
php php php php php php*php php php Ifphp omittedphp,php usesphp php'currentphp localephp'php.
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php abstractphp publicphp functionphp getCoveredPercentagephp(php$stringphp,php php$charEncodingphp php=php php'php'php)php;

php php php php php/php*php*
php php php php php php*php Returnsphp thephp widthsphp ofphp thephp glyphsphp.
php php php php php php*
php php php php php php*php Thephp widthsphp arephp expressedphp inphp thephp fontphp'sphp glyphphp spacephp.php Youphp arephp responsible
php php php php php php*php forphp convertingphp tophp userphp spacephp asphp necessaryphp.php Seephp php{php@linkphp unitsPerEmphp(php)php}php.
php php php php php php*
php php php php php php*php Seephp alsophp php{php@linkphp widthForGlyphphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$glyphNumbersphp Arrayphp ofphp glyphphp numbersphp.
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp glyphphp widthsphp php(integersphp)php.
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php abstractphp publicphp functionphp widthsForGlyphsphp(php$glyphNumbersphp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp thephp widthphp ofphp thephp glyphphp.
php php php php php php*
php php php php php php*php Likephp php{php@linkphp widthsForGlyphsphp(php)php}php butphp usedphp forphp onephp glyphphp atphp aphp timephp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$glyphNumber
php php php php php php*php php@returnphp integer
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php abstractphp publicphp functionphp widthForGlyphphp(php$glyphNumberphp)php;

php php php php php/php*php*
php php php php php php*php Convertphp stringphp tophp thephp fontphp encodingphp.
php php php php php php*
php php php php php php*php Thephp methodphp isphp usedphp tophp preparephp stringphp forphp textphp drawingphp operators
php php php php php php*
php php php php php php*php php@paramphp stringphp php$string
php php php php php php*php php@paramphp stringphp php$charEncodingphp Characterphp encodingphp ofphp sourcephp textphp.
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php abstractphp publicphp functionphp encodeStringphp(php$stringphp,php php$charEncodingphp)php;

php php php php php/php*php*
php php php php php php*php Convertphp stringphp fromphp thephp fontphp encodingphp.
php php php php php php*
php php php php php php*php Thephp methodphp isphp usedphp tophp convertphp stringsphp retrievedphp fromphp existingphp contentphp streams
php php php php php php*
php php php php php php*php php@paramphp stringphp php$string
php php php php php php*php php@paramphp stringphp php$charEncodingphp Characterphp encodingphp ofphp resultingphp textphp.
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php abstractphp publicphp functionphp decodeStringphp(php$stringphp,php php$charEncodingphp)php;



php php php/php*php*php*php*php Internalphp Methodsphp php*php*php*php*php/


php php php php php/php*php*
php php php php php php*php Ifphp thephp fontphp'sphp glyphphp spacephp isphp notphp php1php0php0php0php unitsphp perphp emphp,php convertsphp thephp valuephp.
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@paramphp integerphp php$value
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp toEmSpacephp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_unitsPerEmphp php=php=php php1php0php0php0php)php php{
php php php php php php php php php php php php returnphp php$valuephp;
php php php php php php php php php}
php php php php php php php php returnphp ceilphp(php(php$valuephp php/php php$thisphp-php>php_unitsPerEmphp)php php*php php1php0php0php0php)php;php php php php php/php/php alwaysphp roundphp up
php php php php php}
php}

