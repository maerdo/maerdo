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
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Formphp_Elementphp_Xhtmlphp php*php/
requirephp_oncephp php'Zendphp/Formphp/Elementphp/Xhtmlphp.phpphp'php;

php/php*php*
php php*php Basephp classphp forphp multiphp-optionphp formphp elements
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Multiphp.phpphp php2php2php3php2php2php php2php0php1php0php-php0php5php-php3php0php php1php1php:php1php2php:php5php7Zphp thomasphp php$
php php*php/
abstractphp classphp Zendphp_Formphp_Elementphp_Multiphp extendsphp Zendphp_Formphp_Elementphp_Xhtml
php{
php php php php php/php*php*
php php php php php php*php Arrayphp ofphp optionsphp forphp multiphp-item
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php publicphp php$optionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Flagphp:php autoregisterphp inArrayphp validatorphp?
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_registerInArrayValidatorphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Separatorphp tophp usephp betweenphp optionsphp;php defaultsphp tophp php'php<brphp php/php>php'php.
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_separatorphp php=php php'php<brphp php/php>php'php;

php php php php php/php*php*
php php php php php php*php Whichphp valuesphp arephp translatedphp alreadyphp?
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_translatedphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Retrievephp separator
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getSeparatorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_separatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp separator
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$separator
php php php php php php*php php@returnphp self
php php php php php php*php/
php php php php publicphp functionphp setSeparatorphp(php$separatorphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_separatorphp php=php php$separatorphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp optionsphp array
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_getMultiOptionsphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>optionsphp php|php|php php!isphp_arrayphp(php$thisphp-php>optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>optionsphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp anphp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$option
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_Multi
php php php php php php*php/
php php php php publicphp functionphp addMultiOptionphp(php$optionphp,php php$valuephp php=php php'php'php)
php php php php php{
php php php php php php php php php$optionphp php php=php php(stringphp)php php$optionphp;
php php php php php php php php php$thisphp-php>php_getMultiOptionsphp(php)php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_translateOptionphp(php$optionphp,php php$valuephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>optionsphp[php$optionphp]php php=php php$valuephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp manyphp optionsphp atphp once
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_Multi
php php php php php php*php/
php php php php publicphp functionphp addMultiOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$optionphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)
php php php php php php php php php php php php php php php php php&php&php arrayphp_keyphp_existsphp(php'keyphp'php,php php$valuephp)
php php php php php php php php php php php php php php php php php&php&php arrayphp_keyphp_existsphp(php'valuephp'php,php php$valuephp)
php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>addMultiOptionphp(php$valuephp[php'keyphp'php]php,php php$valuephp[php'valuephp'php]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>addMultiOptionphp(php$optionphp,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp allphp optionsphp atphp oncephp php(overwritesphp)
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_Multi
php php php php php php*php/
php php php php publicphp functionphp setMultiOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>clearMultiOptionsphp(php)php;
php php php php php php php php returnphp php$thisphp-php>addMultiOptionsphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp singlephp multiphp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$option
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getMultiOptionphp(php$optionphp)
php php php php php{
php php php php php php php php php$optionphp php php=php php(stringphp)php php$optionphp;
php php php php php php php php php$thisphp-php>php_getMultiOptionsphp(php)php;
php php php php php php php php ifphp php(issetphp(php$thisphp-php>optionsphp[php$optionphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_translateOptionphp(php$optionphp,php php$thisphp-php>optionsphp[php$optionphp]php)php;
php php php php php php php php php php php php returnphp php$thisphp-php>optionsphp[php$optionphp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp options
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getMultiOptionsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_getMultiOptionsphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>optionsphp asphp php$optionphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_translateOptionphp(php$optionphp,php php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp singlephp multiphp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$option
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp removeMultiOptionphp(php$optionphp)
php php php php php{
php php php php php php php php php$optionphp php php=php php(stringphp)php php$optionphp;
php php php php php php php php php$thisphp-php>php_getMultiOptionsphp(php)php;
php php php php php php php php ifphp php(issetphp(php$thisphp-php>optionsphp[php$optionphp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>optionsphp[php$optionphp]php)php;
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_translatedphp[php$optionphp]php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_translatedphp[php$optionphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp allphp options
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_Multi
php php php php php php*php/
php php php php publicphp functionphp clearMultiOptionsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>optionsphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_translatedphp php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp flagphp indicatingphp whetherphp orphp notphp tophp autophp-registerphp inArrayphp validator
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_Multi
php php php php php php*php/
php php php php publicphp functionphp setRegisterInArrayValidatorphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_registerInArrayValidatorphp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp statusphp ofphp autophp-registerphp inArrayphp validatorphp flag
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp registerInArrayValidatorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_registerInArrayValidatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp thephp valuephp providedphp validphp?
php php php php php php*
php php php php php php*php Autoregistersphp InArrayphp validatorphp ifphp necessaryphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@paramphp php mixedphp php$context
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp,php php$contextphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>registerInArrayValidatorphp(php)php)php php{
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>getValidatorphp(php'InArrayphp'php)php)php php{
php php php php php php php php php php php php php php php php php$multiOptionsphp php=php php$thisphp-php>getMultiOptionsphp(php)php;
php php php php php php php php php php php php php php php php php$optionsphp php php php php php php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php foreachphp php(php$multiOptionsphp asphp php$optphp_valuephp php=php>php php$optphp_labelphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php optgroupphp insteadphp ofphp optionphp label
php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$optphp_labelphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$optionsphp php=php arrayphp_mergephp(php$optionsphp,php arrayphp_keysphp(php$optphp_labelphp)php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$optionsphp[php]php php=php php$optphp_valuephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$thisphp-php>addValidatorphp(
php php php php php php php php php php php php php php php php php php php php php'InArrayphp'php,
php php php php php php php php php php php php php php php php php php php php truephp,
php php php php php php php php php php php php php php php php php php php php arrayphp(php$optionsphp)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp parentphp:php:isValidphp(php$valuephp,php php$contextphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Translatephp anphp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$option
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_translateOptionphp(php$optionphp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>translatorIsDisabledphp(php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_translatedphp[php$optionphp]php)php php&php&php php!emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>optionsphp[php$optionphp]php php=php php$thisphp-php>php_translateValuephp(php$valuephp)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>optionsphp[php$optionphp]php php=php=php=php php$valuephp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_translatedphp[php$optionphp]php php=php truephp;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Translatephp aphp multiphp optionphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_translateValuephp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php php php php php$valuephp[php$keyphp]php php=php php$thisphp-php>php_translateValuephp(php$valphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$valuephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$translatorphp php=php php$thisphp-php>getTranslatorphp(php)php)php)php php{
php php php php php php php php php php php php php php php php returnphp php$translatorphp-php>translatephp(php$valuephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$valuephp;
php php php php php php php php php}
php php php php php}
php}
