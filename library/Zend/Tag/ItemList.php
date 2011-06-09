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
php php*php php@packagephp php php php Zendphp_Tag
php php*php php@subpackagephp ItemList
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ItemListphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Tagphp_Taggable
php php*php/
requirephp_oncephp php'Zendphp/Tagphp/Taggablephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tag
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Tagphp_ItemListphp implementsphp Countablephp,php SeekableIteratorphp,php ArrayAccess
php{
php php php php php/php*php*
php php php php php php*php Itemsphp inphp thisphp list
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_itemsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Countphp allphp items
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_itemsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Spreadphp valuesphp inphp thephp itemsphp relativephp tophp theirphp weight
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$values
php php php php php php*php php@throwsphp Zendphp_Tagphp_Exceptionphp Whenphp valuephp listphp isphp empty
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp spreadWeightValuesphp(arrayphp php$valuesphp)
php php php php php{
php php php php php php php php php/php/php Donphp'tphp allowphp anphp emptyphp valuephp list
php php php php php php php php ifphp php(countphp(php$valuesphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Tagphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Tagphp_Exceptionphp(php'Valuephp listphp mayphp notphp bephp emptyphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Rephp-indexphp thephp array
php php php php php php php php php$valuesphp php=php arrayphp_valuesphp(php$valuesphp)php;

php php php php php php php php php/php/php Ifphp justphp aphp singlephp valuephp isphp suppliedphp simplyphp assignphp itphp tophp tophp allphp tags
php php php php php php php php ifphp php(countphp(php$valuesphp)php php=php=php=php php1php)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_itemsphp asphp php$itemphp)php php{
php php php php php php php php php php php php php php php php php$itemphp-php>setParamphp(php'weightValuephp'php,php php$valuesphp[php0php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Calculatephp minphp-php andphp maxphp-weight
php php php php php php php php php php php php php$minWeightphp php=php nullphp;
php php php php php php php php php php php php php$maxWeightphp php=php nullphp;

php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_itemsphp asphp php$itemphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$minWeightphp php=php=php=php nullphp php&php&php php$maxWeightphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php$minWeightphp php=php php$itemphp-php>getWeightphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$maxWeightphp php=php php$itemphp-php>getWeightphp(php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$minWeightphp php=php minphp(php$minWeightphp,php php$itemphp-php>getWeightphp(php)php)php;
php php php php php php php php php php php php php php php php php php php php php$maxWeightphp php=php maxphp(php$maxWeightphp,php php$itemphp-php>getWeightphp(php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Calculatephp thephp thresholds
php php php php php php php php php php php php php$stepsphp php php php php php php=php countphp(php$valuesphp)php;
php php php php php php php php php php php php php$deltaphp php php php php php php=php php(php$maxWeightphp php-php php$minWeightphp)php php/php php(php$stepsphp php-php php1php)php;
php php php php php php php php php php php php php$thresholdsphp php=php arrayphp(php)php;

php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$stepsphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php$thresholdsphp[php$iphp]php php=php floorphp(php1php0php0php php*php logphp(php(php$minWeightphp php+php php$iphp php*php php$deltaphp)php php+php php2php)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Thenphp assignphp thephp weightphp values
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_itemsphp asphp php$itemphp)php php{
php php php php php php php php php php php php php php php php php$thresholdphp php=php floorphp(php1php0php0php php*php logphp(php$itemphp-php>getWeightphp(php)php php+php php2php)php)php;

php php php php php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$stepsphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$thresholdphp <php=php php$thresholdsphp[php$iphp]php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$itemphp-php>setParamphp(php'weightValuephp'php,php php$valuesphp[php$iphp]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Seekphp tophp anphp absolutephp positio
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$index
php php php php php php*php php@throwsphp OutOfBoundsExceptionphp Whenphp thephp seekphp positionphp isphp invalid
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp seekphp(php$indexphp)
php php php php php{
php php php php php php php php php$thisphp-php>rewindphp(php)php;
php php php php php php php php php$positionphp php=php php0php;

php php php php php php php php whilephp php(php$positionphp <php php$indexphp php&php&php php$thisphp-php>validphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>nextphp(php)php;
php php php php php php php php php php php php php$positionphp+php+php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>validphp(php)php)php php{
php php php php php php php php php php php php throwphp newphp OutOfBoundsExceptionphp(php'Invalidphp seekphp positionphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp currentphp element
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php returnphp currentphp(php$thisphp-php>php_itemsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Movephp forwardphp tophp nextphp element
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php returnphp nextphp(php$thisphp-php>php_itemsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp keyphp ofphp thephp currentphp element
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp keyphp(php$thisphp-php>php_itemsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp therephp isphp aphp currentphp elementphp afterphp callsphp tophp rewindphp(php)php orphp nextphp(php)
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp php(php$thisphp-php>currentphp(php)php php!php=php=php falsephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rewindphp thephp Iteratorphp tophp thephp firstphp element
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php resetphp(php$thisphp-php>php_itemsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp anphp offsetphp exists
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$offset
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp offsetExistsphp(php$offsetphp)php php{
php php php php php php php php returnphp arrayphp_keyphp_existsphp(php$offsetphp,php php$thisphp-php>php_itemsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp valuephp ofphp anphp offset
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$offset
php php php php php php*php php@returnphp Zendphp_Tagphp_Taggable
php php php php php php*php/
php php php php publicphp functionphp offsetGetphp(php$offsetphp)php php{
php php php php php php php php returnphp php$thisphp-php>php_itemsphp[php$offsetphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendphp aphp newphp item
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php php php php php php php php php php$offset
php php php php php php*php php@paramphp php Zendphp_Tagphp_Taggablephp php$item
php php php php php php*php php@throwsphp OutOfBoundsExceptionphp Whenphp itemphp doesphp notphp implementphp Zendphp_Tagphp_Taggable
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp offsetSetphp(php$offsetphp,php php$itemphp)php php{
php php php php php php php php php/php/php Wephp needphp tophp makephp thatphp checkphp herephp,php asphp thephp methodphp signaturephp mustphp be
php php php php php php php php php/php/php compatiblephp withphp ArrayAccessphp:php:offsetSetphp(php)
php php php php php php php php ifphp php(php!php(php$itemphp instanceofphp Zendphp_Tagphp_Taggablephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Tagphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Tagphp_Exceptionphp(php'Itemphp mustphp implementphp Zendphp_Tagphp_Taggablephp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$offsetphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_itemsphp[php]php php=php php$itemphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_itemsphp[php$offsetphp]php php=php php$itemphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Unsetphp anphp item
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$offset
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp offsetUnsetphp(php$offsetphp)php php{
php php php php php php php php unsetphp(php$thisphp-php>php_itemsphp[php$offsetphp]php)php;
php php php php php}
php}
