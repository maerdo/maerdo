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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Compressionphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Pdfphp_Filterphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Filterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php ASCIIphp8php5php streamphp filter
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Pdfphp_Filterphp_Compressionphp implementsphp Zendphp_Pdfphp_Filterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Paethphp predictionphp function
php php php php php php*
php php php php php php*php php@paramphp integerphp php$a
php php php php php php*php php@paramphp integerphp php$b
php php php php php php*php php@paramphp integerphp php$c
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php privatephp staticphp functionphp php_paethphp(php$aphp,php php$bphp,php php$cphp)
php php php php php{
php php php php php php php php php/php/php php$aphp php-php leftphp,php php$bphp php-php abovephp,php php$cphp php-php upperphp left
php php php php php php php php php$pphp php php=php php$aphp php+php php$bphp php-php php$cphp;php php php php php php php php/php/php initialphp estimate
php php php php php php php php php$paphp php=php absphp(php$pphp php-php php$aphp)php;php php php php php php php php/php/php distancesphp tophp aphp,php bphp,php c
php php php php php php php php php$pbphp php=php absphp(php$pphp php-php php$bphp)php;
php php php php php php php php php$pcphp php=php absphp(php$pphp php-php php$cphp)php;

php php php php php php php php php/php/php returnphp nearestphp ofphp aphp,bphp,cphp,
php php php php php php php php php/php/php breakingphp tiesphp inphp orderphp aphp,bphp,cphp.
php php php php php php php php ifphp php(php$paphp <php=php php$pbphp php&php&php php$paphp <php=php php$pcphp)php php{
php php php php php php php php php php php php returnphp php$aphp;
php php php php php php php php php}php elsephp ifphp php(php$pbphp <php=php php$pcphp)php php{
php php php php php php php php php php php php returnphp php$bphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$cphp;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp Predictorphp decodephp paramphp value
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp integer
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php privatephp staticphp functionphp php_getPredictorValuephp(php&php$paramsphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'Predictorphp'php]php)php)php php{
php php php php php php php php php php php php php$predictorphp php=php php$paramsphp[php'Predictorphp'php]php;

php php php php php php php php php php php php ifphp php(php$predictorphp php!php=php php1php php php php&php&php php php$predictorphp php!php=php php2php php php php&php&
php php php php php php php php php php php php php php php php php$predictorphp php!php=php php1php0php php php&php&php php php$predictorphp php!php=php php1php1php php php&php&php php php php$predictorphp php!php=php php1php2php php php&php&
php php php php php php php php php php php php php php php php php$predictorphp php!php=php php1php3php php php&php&php php php$predictorphp php!php=php php1php4php php php&php&php php php php$predictorphp php!php=php php1php5php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Invalidphp valuephp ofphp php\php'Predictorphp\php'php decodephp paramphp php-php php'php php.php php$predictorphp php.php php'php.php'php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$predictorphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php1php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp Colorsphp decodephp paramphp value
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp integer
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php privatephp staticphp functionphp php_getColorsValuephp(php&php$paramsphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'Colorsphp'php]php)php)php php{
php php php php php php php php php php php php php$colorsphp php=php php$paramsphp[php'Colorsphp'php]php;

php php php php php php php php php php php php ifphp php(php$colorsphp php!php=php php1php php php&php&php php php$colorsphp php!php=php php2php php php&php&php php php$colorsphp php!php=php php3php php php&php&php php php$colorsphp php!php=php php4php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Invalidphp valuephp ofphp php\php'Colorphp\php'php decodephp paramphp php-php php'php php.php php$colorsphp php.php php'php.php'php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$colorsphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php1php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp BitsPerComponentphp decodephp paramphp value
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp integer
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php privatephp staticphp functionphp php_getBitsPerComponentValuephp(php&php$paramsphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'BitsPerComponentphp'php]php)php)php php{
php php php php php php php php php php php php php$bitsPerComponentphp php=php php$paramsphp[php'BitsPerComponentphp'php]php;

php php php php php php php php php php php php ifphp php(php$bitsPerComponentphp php!php=php php1php php php&php&php php php$bitsPerComponentphp php!php=php php2php php php&php&
php php php php php php php php php php php php php php php php php$bitsPerComponentphp php!php=php php4php php php&php&php php php$bitsPerComponentphp php!php=php php8php php php&php&
php php php php php php php php php php php php php php php php php$bitsPerComponentphp php!php=php php1php6php php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Invalidphp valuephp ofphp php\php'BitsPerComponentphp\php'php decodephp paramphp php-php php'php php.php php$bitsPerComponentphp php.php php'php.php'php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$bitsPerComponentphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php8php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp Columnsphp decodephp paramphp value
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php privatephp staticphp functionphp php_getColumnsValuephp(php&php$paramsphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'Columnsphp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$paramsphp[php'Columnsphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php1php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Convertphp streamphp dataphp accordingphp tophp thephp filterphp paramsphp setphp beforephp encodingphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_applyEncodeParamsphp(php$dataphp,php php$paramsphp)php php{
php php php php php php php php php$predictorphp php php php php php php php php=php selfphp:php:php_getPredictorValuephp(php$paramsphp)php;
php php php php php php php php php$colorsphp php php php php php php php php php php php=php selfphp:php:php_getColorsValuephp(php$paramsphp)php;
php php php php php php php php php$bitsPerComponentphp php=php selfphp:php:php_getBitsPerComponentValuephp(php$paramsphp)php;
php php php php php php php php php$columnsphp php php php php php php php php php php=php selfphp:php:php_getColumnsValuephp(php$paramsphp)php;

php php php php php php php php php/php*php*php Nonephp ofphp predictionphp php*php/
php php php php php php php php ifphp php(php$predictorphp php=php=php php1php)php php{
php php php php php php php php php php php php returnphp php$dataphp;
php php php php php php php php php}

php php php php php php php php php/php*php*php TIFFphp Predictorphp php2php php*php/
php php php php php php php php ifphp php(php$predictorphp php=php=php php2php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Notphp implementedphp yetphp'php php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*php Optimalphp PNGphp predictionphp php*php/
php php php php php php php php ifphp php(php$predictorphp php=php=php php1php5php)php php{
php php php php php php php php php php php php php/php*php*php Usephp Paethphp predictionphp asphp optimalphp php*php/
php php php php php php php php php php php php php$predictorphp php=php php1php4php;
php php php php php php php php php}

php php php php php php php php php/php*php*php PNGphp predictionphp php*php/
php php php php php php php php ifphp php(php$predictorphp php=php=php php1php0php php|php|php php php/php*php*php Nonephp ofphp predictionphp php*php/
php php php php php php php php php php php php php$predictorphp php=php=php php1php1php php|php|php php php/php*php*php Subphp predictionphp php php php php php*php/
php php php php php php php php php php php php php$predictorphp php=php=php php1php2php php|php|php php php/php*php*php Upphp predictionphp php php php php php php*php/
php php php php php php php php php php php php php$predictorphp php=php=php php1php3php php|php|php php php/php*php*php Averagephp predictionphp php*php/
php php php php php php php php php php php php php$predictorphp php=php=php php1php4php php php php php php/php*php*php Paethphp predictionphp php php php*php/
php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php$predictorphp php-php=php php1php0php;

php php php php php php php php php php php php ifphp(php$bitsPerComponentphp php=php=php php1php6php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"PNGphp Predictionphp withphp bitphp depthphp greaterphp thanphp php8php notphp yetphp supportedphp.php"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$bitsPerSamplephp php php=php php$bitsPerComponentphp*php$colorsphp;
php php php php php php php php php php php php php$bytesPerSamplephp php=php php(intphp)php(php(php$bitsPerSamplephp php+php php7php)php/php8php)php;php php php php php php php php php php php php/php/php php(intphp)ceilphp(php.php.php.php)php emulation
php php php php php php php php php php php php php$bytesPerRowphp php php php php=php php(intphp)php(php(php$bitsPerSamplephp*php$columnsphp php+php php7php)php/php8php)php;php php php/php/php php(intphp)ceilphp(php.php.php.php)php emulation
php php php php php php php php php php php php php$rowsphp php php php php php php php php php php php=php strlenphp(php$dataphp)php/php$bytesPerRowphp;
php php php php php php php php php php php php php$outputphp php php php php php php php php php=php php'php'php;
php php php php php php php php php php php php php$offsetphp php php php php php php php php php=php php0php;

php php php php php php php php php php php php ifphp php(php!isphp_integerphp(php$rowsphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Wrongphp dataphp lengthphp.php'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php switchphp php(php$predictorphp)php php{
php php php php php php php php php php php php php php php php casephp php0php:php php/php/php Nonephp ofphp prediction
php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$rowsphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php chrphp(php$predictorphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php substrphp(php$dataphp,php php$offsetphp,php php$bytesPerRowphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$offsetphp php+php=php php$bytesPerRowphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php1php:php php/php/php Subphp prediction
php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$rowsphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php chrphp(php$predictorphp)php;

php php php php php php php php php php php php php php php php php php php php php php php php php$lastSamplephp php=php arrayphp_fillphp(php0php,php php$bytesPerSamplephp,php php0php)php;
php php php php php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp2php php=php php0php;php php$countphp2php <php php$bytesPerRowphp;php php$countphp2php+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$newBytephp php=php ordphp(php$dataphp[php$offsetphp+php+php]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Notephp.php chrphp(php)php automaticallyphp cutsphp inputphp tophp php8php bit
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php chrphp(php$newBytephp php-php php$lastSamplephp[php$countphp2php php%php php$bytesPerSamplephp]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$lastSamplephp[php$countphp2php php%php php$bytesPerSamplephp]php php=php php$newBytephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php2php:php php/php/php Upphp prediction
php php php php php php php php php php php php php php php php php php php php php$lastRowphp php=php arrayphp_fillphp(php0php,php php$bytesPerRowphp,php php0php)php;
php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$rowsphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php chrphp(php$predictorphp)php;

php php php php php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp2php php=php php0php;php php$countphp2php <php php$bytesPerRowphp;php php$countphp2php+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$newBytephp php=php ordphp(php$dataphp[php$offsetphp+php+php]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Notephp.php chrphp(php)php automaticallyphp cutsphp inputphp tophp php8php bit
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php chrphp(php$newBytephp php-php php$lastRowphp[php$countphp2php]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$lastRowphp[php$countphp2php]php php=php php$newBytephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php3php:php php/php/php Averagephp prediction
php php php php php php php php php php php php php php php php php php php php php$lastRowphp php=php arrayphp_fillphp(php0php,php php$bytesPerRowphp,php php0php)php;
php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$rowsphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php chrphp(php$predictorphp)php;

php php php php php php php php php php php php php php php php php php php php php php php php php$lastSamplephp php=php arrayphp_fillphp(php0php,php php$bytesPerSamplephp,php php0php)php;
php php php php php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp2php php=php php0php;php php$countphp2php <php php$bytesPerRowphp;php php$countphp2php+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$newBytephp php=php ordphp(php$dataphp[php$offsetphp+php+php]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Notephp.php chrphp(php)php automaticallyphp cutsphp inputphp tophp php8php bit
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php chrphp(php$newBytephp php-php floorphp(php(php php$lastSamplephp[php$countphp2php php%php php$bytesPerSamplephp]php php+php php$lastRowphp[php$countphp2php]php)php/php2php)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$lastSamplephp[php$countphp2php php%php php$bytesPerSamplephp]php php=php php$lastRowphp[php$countphp2php]php php=php php$newBytephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php4php:php php/php/php Paethphp prediction
php php php php php php php php php php php php php php php php php php php php php$lastRowphp php php php php=php arrayphp_fillphp(php0php,php php$bytesPerRowphp,php php0php)php;
php php php php php php php php php php php php php php php php php php php php php$currentRowphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$rowsphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php chrphp(php$predictorphp)php;

php php php php php php php php php php php php php php php php php php php php php php php php php$lastSamplephp php=php arrayphp_fillphp(php0php,php php$bytesPerSamplephp,php php0php)php;
php php php php php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp2php php=php php0php;php php$countphp2php <php php$bytesPerRowphp;php php$countphp2php+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$newBytephp php=php ordphp(php$dataphp[php$offsetphp+php+php]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Notephp.php chrphp(php)php automaticallyphp cutsphp inputphp tophp php8php bit
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php chrphp(php$newBytephp php-php selfphp:php:php_paethphp(php php$lastSamplephp[php$countphp2php php%php php$bytesPerSamplephp]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$lastRowphp[php$countphp2php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$countphp2php php-php php$bytesPerSamplephp php <php php php0php)php?
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php0php php:php php$lastRowphp[php$countphp2php php-php php$bytesPerSamplephp]php php)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$lastSamplephp[php$countphp2php php%php php$bytesPerSamplephp]php php=php php$currentRowphp[php$countphp2php]php php=php php$newBytephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$lastRowphp php=php php$currentRowphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$outputphp;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Unknownphp predictionphp algorithmphp php-php php'php php.php php$predictorphp php.php php'php.php'php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp streamphp dataphp accordingphp tophp thephp filterphp paramsphp setphp afterphp decodingphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_applyDecodeParamsphp(php$dataphp,php php$paramsphp)php php{
php php php php php php php php php$predictorphp php php php php php php php php=php selfphp:php:php_getPredictorValuephp(php$paramsphp)php;
php php php php php php php php php$colorsphp php php php php php php php php php php php=php selfphp:php:php_getColorsValuephp(php$paramsphp)php;
php php php php php php php php php$bitsPerComponentphp php=php selfphp:php:php_getBitsPerComponentValuephp(php$paramsphp)php;
php php php php php php php php php$columnsphp php php php php php php php php php php=php selfphp:php:php_getColumnsValuephp(php$paramsphp)php;

php php php php php php php php php/php*php*php Nonephp ofphp predictionphp php*php/
php php php php php php php php ifphp php(php$predictorphp php=php=php php1php)php php{
php php php php php php php php php php php php returnphp php$dataphp;
php php php php php php php php php}

php php php php php php php php php/php*php*php TIFFphp Predictorphp php2php php*php/
php php php php php php php php ifphp php(php$predictorphp php=php=php php2php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Notphp implementedphp yetphp'php php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php PNGphp prediction
php php php php php php php php php php*php Predictionphp codephp isphp duplicatedphp onphp eachphp rowphp.
php php php php php php php php php php*php Thusphp allphp casesphp canphp bephp broughtphp tophp one
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$predictorphp php=php=php php1php0php php|php|php php php/php*php*php Nonephp ofphp predictionphp php*php/
php php php php php php php php php php php php php$predictorphp php=php=php php1php1php php|php|php php php/php*php*php Subphp predictionphp php php php php php*php/
php php php php php php php php php php php php php$predictorphp php=php=php php1php2php php|php|php php php/php*php*php Upphp predictionphp php php php php php php*php/
php php php php php php php php php php php php php$predictorphp php=php=php php1php3php php|php|php php php/php*php*php Averagephp predictionphp php*php/
php php php php php php php php php php php php php$predictorphp php=php=php php1php4php php|php|php php php/php*php*php Paethphp predictionphp php php php*php/
php php php php php php php php php php php php php$predictorphp php=php=php php1php5php php php php php php/php*php*php Optimalphp predictionphp php*php/php)php php{

php php php php php php php php php php php php php$bitsPerSamplephp php php=php php$bitsPerComponentphp*php$colorsphp;
php php php php php php php php php php php php php$bytesPerSamplephp php=php ceilphp(php$bitsPerSamplephp/php8php)php;
php php php php php php php php php php php php php$bytesPerRowphp php php php php=php ceilphp(php$bitsPerSamplephp*php$columnsphp/php8php)php;
php php php php php php php php php php php php php$rowsphp php php php php php php php php php php php=php ceilphp(strlenphp(php$dataphp)php/php(php$bytesPerRowphp php+php php1php)php)php;
php php php php php php php php php php php php php$outputphp php php php php php php php php php=php php'php'php;
php php php php php php php php php php php php php$offsetphp php php php php php php php php php=php php0php;

php php php php php php php php php php php php php$lastRowphp php=php arrayphp_fillphp(php0php,php php$bytesPerRowphp,php php0php)php;
php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$rowsphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php$lastSamplephp php=php arrayphp_fillphp(php0php,php php$bytesPerSamplephp,php php0php)php;
php php php php php php php php php php php php php php php php switchphp php(ordphp(php$dataphp[php$offsetphp+php+php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php casephp php0php:php php/php/php Nonephp ofphp prediction
php php php php php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php substrphp(php$dataphp,php php$offsetphp,php php$bytesPerRowphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp2php php=php php0php;php php$countphp2php <php php$bytesPerRowphp php php&php&php php php$offsetphp <php strlenphp(php$dataphp)php;php php$countphp2php+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$lastSamplephp[php$countphp2php php%php php$bytesPerSamplephp]php php=php php$lastRowphp[php$countphp2php]php php=php ordphp(php$dataphp[php$offsetphp+php+php]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php casephp php1php:php php/php/php Subphp prediction
php php php php php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp2php php=php php0php;php php$countphp2php <php php$bytesPerRowphp php php&php&php php php$offsetphp <php strlenphp(php$dataphp)php;php php$countphp2php+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$decodedBytephp php=php php(ordphp(php$dataphp[php$offsetphp+php+php]php)php php+php php$lastSamplephp[php$countphp2php php%php php$bytesPerSamplephp]php)php php&php php0xFFphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$lastSamplephp[php$countphp2php php%php php$bytesPerSamplephp]php php=php php$lastRowphp[php$countphp2php]php php=php php$decodedBytephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php chrphp(php$decodedBytephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php casephp php2php:php php/php/php Upphp prediction
php php php php php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp2php php=php php0php;php php$countphp2php <php php$bytesPerRowphp php php&php&php php php$offsetphp <php strlenphp(php$dataphp)php;php php$countphp2php+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$decodedBytephp php=php php(ordphp(php$dataphp[php$offsetphp+php+php]php)php php+php php$lastRowphp[php$countphp2php]php)php php&php php0xFFphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$lastSamplephp[php$countphp2php php%php php$bytesPerSamplephp]php php=php php$lastRowphp[php$countphp2php]php php=php php$decodedBytephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php chrphp(php$decodedBytephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php casephp php3php:php php/php/php Averagephp prediction
php php php php php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp2php php=php php0php;php php$countphp2php <php php$bytesPerRowphp php php&php&php php php$offsetphp <php strlenphp(php$dataphp)php;php php$countphp2php+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$decodedBytephp php=php php(ordphp(php$dataphp[php$offsetphp+php+php]php)php php+
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php floorphp(php(php php$lastSamplephp[php$countphp2php php%php php$bytesPerSamplephp]php php+php php$lastRowphp[php$countphp2php]php)php/php2php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php php&php php0xFFphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$lastSamplephp[php$countphp2php php%php php$bytesPerSamplephp]php php=php php$lastRowphp[php$countphp2php]php php=php php$decodedBytephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php chrphp(php$decodedBytephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php casephp php4php:php php/php/php Paethphp prediction
php php php php php php php php php php php php php php php php php php php php php php php php php$currentRowphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp2php php=php php0php;php php$countphp2php <php php$bytesPerRowphp php php&php&php php php$offsetphp <php strlenphp(php$dataphp)php;php php$countphp2php+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$decodedBytephp php=php php(ordphp(php$dataphp[php$offsetphp+php+php]php)php php+
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:php_paethphp(php$lastSamplephp[php$countphp2php php%php php$bytesPerSamplephp]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$lastRowphp[php$countphp2php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$countphp2php php-php php$bytesPerSamplephp php <php php php0php)php?
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php0php php:php php$lastRowphp[php$countphp2php php-php php$bytesPerSamplephp]php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php php&php php0xFFphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$lastSamplephp[php$countphp2php php%php php$bytesPerSamplephp]php php=php php$currentRowphp[php$countphp2php]php php=php php$decodedBytephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php chrphp(php$decodedBytephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$lastRowphp php=php php$currentRowphp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Unknownphp predictionphp tagphp.php'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$outputphp;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Unknownphp predictionphp algorithmphp php-php php'php php.php php$predictorphp php.php php'php.php'php php)php;
php php php php php}
php}
