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
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Config
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php Xmlphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Config
php php*php/
requirephp_oncephp php'Zendphp/Configphp.phpphp'php;

php/php*php*
php php*php XMLphp Adapterphp forphp Zendphp_Config
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Config
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Configphp_Xmlphp extendsphp Zendphp_Config
php{
php php php php php/php*php*
php php php php php php*php XMLphp namespacephp forphp ZFphp-relatedphp tagsphp andphp attributes
php php php php php php*php/
php php php php constphp XMLphp_NAMESPACEphp php=php php'httpphp:php/php/frameworkphp.zendphp.comphp/xmlphp/zendphp-configphp-xmlphp/php1php.php0php/php'php;

php php php php php/php*php*
php php php php php php*php Whetherphp tophp skipphp extendsphp orphp not
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_skipExtendsphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Loadsphp thephp sectionphp php$sectionphp fromphp thephp configphp filephp php(orphp stringphp php$xmlphp for
php php php php php php*php accessphp facilitatedphp byphp nestedphp objectphp propertiesphp.
php php php php php php*
php php php php php php*php Sectionsphp arephp definedphp inphp thephp XMLphp asphp childrenphp ofphp thephp rootphp elementphp.
php php php php php php*
php php php php php php*php Inphp orderphp tophp extendphp anotherphp sectionphp,php aphp sectionphp definesphp thephp php"extendsphp"
php php php php php php*php attributephp havingphp aphp valuephp ofphp thephp sectionphp namephp fromphp whichphp thephp extending
php php php php php php*php sectionphp inheritsphp valuesphp.
php php php php php php*
php php php php php php*php Notephp thatphp thephp keysphp inphp php$sectionphp willphp overridephp anyphp keysphp ofphp thephp same
php php php php php php*php namephp inphp thephp sectionsphp thatphp havephp beenphp includedphp viaphp php"extendsphp"php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$xmlphp php php php php XMLphp filephp orphp stringphp tophp process
php php php php php php*php php@paramphp php mixedphp php php php$sectionphp Sectionphp tophp process
php php php php php php*php php@paramphp php booleanphp php$optionsphp Whetherphp modificationsphp arephp allowedphp atphp runtime
php php php php php php*php php@throwsphp Zendphp_Configphp_Exceptionphp Whenphp xmlphp isphp notphp setphp orphp cannotphp bephp loaded
php php php php php php*php php@throwsphp Zendphp_Configphp_Exceptionphp Whenphp sectionphp php$sectionNamephp cannotphp bephp foundphp inphp php$xml
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$xmlphp,php php$sectionphp php=php nullphp,php php$optionsphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$xmlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php'Filenamephp isphp notphp setphp'php)php;
php php php php php php php php php}

php php php php php php php php php$allowModificationsphp php=php falsephp;
php php php php php php php php ifphp php(isphp_boolphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$allowModificationsphp php=php php$optionsphp;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[php'allowModificationsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$allowModificationsphp php=php php(boolphp)php php$optionsphp[php'allowModificationsphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[php'skipExtendsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_skipExtendsphp php=php php(boolphp)php php$optionsphp[php'skipExtendsphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php setphp_errorphp_handlerphp(arrayphp(php$thisphp,php php'php_loadFileErrorHandlerphp'php)php)php;php php/php/php Warningsphp andphp errorsphp arephp suppressed
php php php php php php php php ifphp php(strstrphp(php$xmlphp,php php'<php?xmlphp'php)php)php php{
php php php php php php php php php php php php php$configphp php=php simplexmlphp_loadphp_stringphp(php$xmlphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$configphp php=php simplexmlphp_loadphp_filephp(php$xmlphp)php;
php php php php php php php php php}

php php php php php php php php restorephp_errorphp_handlerphp(php)php;
php php php php php php php php php/php/php Checkphp ifphp therephp wasphp aphp errorphp whilephp loadingphp file
php php php php php php php php ifphp php(php$thisphp-php>php_loadFileErrorStrphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php$thisphp-php>php_loadFileErrorStrphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$sectionphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$dataArrayphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$configphp asphp php$sectionNamephp php=php>php php$sectionDataphp)php php{
php php php php php php php php php php php php php php php php php$dataArrayphp[php$sectionNamephp]php php=php php$thisphp-php>php_processExtendsphp(php$configphp,php php$sectionNamephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php parentphp:php:php_php_constructphp(php$dataArrayphp,php php$allowModificationsphp)php;
php php php php php php php php php}php elsephp ifphp php(isphp_arrayphp(php$sectionphp)php)php php{
php php php php php php php php php php php php php$dataArrayphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$sectionphp asphp php$sectionNamephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$configphp-php>php$sectionNamephp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php"Sectionphp php'php$sectionNamephp'php cannotphp bephp foundphp inphp php$xmlphp"php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$dataArrayphp php=php arrayphp_mergephp(php$thisphp-php>php_processExtendsphp(php$configphp,php php$sectionNamephp)php,php php$dataArrayphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php parentphp:php:php_php_constructphp(php$dataArrayphp,php php$allowModificationsphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$configphp-php>php$sectionphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php"Sectionphp php'php$sectionphp'php cannotphp bephp foundphp inphp php$xmlphp"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$dataArrayphp php=php php$thisphp-php>php_processExtendsphp(php$configphp,php php$sectionphp)php;
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$dataArrayphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php Sectionphp inphp thephp XMLphp filephp containsphp justphp onephp topphp levelphp string
php php php php php php php php php php php php php php php php php$dataArrayphp php=php arrayphp(php$sectionphp php=php>php php$dataArrayphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php parentphp:php:php_php_constructphp(php$dataArrayphp,php php$allowModificationsphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_loadedSectionphp php=php php$sectionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Helperphp functionphp tophp processphp eachphp elementphp inphp thephp sectionphp andphp handle
php php php php php php*php thephp php"extendsphp"php inheritancephp attributephp.
php php php php php php*
php php php php php php*php php@paramphp php SimpleXMLElementphp php$elementphp XMLphp Elementphp tophp process
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php$sectionphp Sectionphp tophp process
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php php php php$configphp php Configurationphp whichphp wasphp parsedphp yet
php php php php php php*php php@throwsphp Zendphp_Configphp_Exceptionphp Whenphp php$sectionphp cannotphp bephp found
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_processExtendsphp(SimpleXMLElementphp php$elementphp,php php$sectionphp,php arrayphp php$configphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$elementphp-php>php$sectionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php"Sectionphp php'php$sectionphp'php cannotphp bephp foundphp"php)php;
php php php php php php php php php}

php php php php php php php php php$thisSectionphp php php=php php$elementphp-php>php$sectionphp;
php php php php php php php php php$nsAttributesphp php=php php$thisSectionphp-php>attributesphp(selfphp:php:XMLphp_NAMESPACEphp)php;

php php php php php php php php ifphp php(issetphp(php$thisSectionphp[php'extendsphp'php]php)php php|php|php issetphp(php$nsAttributesphp[php'extendsphp'php]php)php)php php{
php php php php php php php php php php php php php$extendedSectionphp php=php php(stringphp)php php(issetphp(php$nsAttributesphp[php'extendsphp'php]php)php php?php php$nsAttributesphp[php'extendsphp'php]php php:php php$thisSectionphp[php'extendsphp'php]php)php;
php php php php php php php php php php php php php$thisphp-php>php_assertValidExtendphp(php$sectionphp,php php$extendedSectionphp)php;

php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_skipExtendsphp)php php{
php php php php php php php php php php php php php php php php php$configphp php=php php$thisphp-php>php_processExtendsphp(php$elementphp,php php$extendedSectionphp,php php$configphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$configphp php=php php$thisphp-php>php_arrayMergeRecursivephp(php$configphp,php php$thisphp-php>php_toArrayphp(php$thisSectionphp)php)php;

php php php php php php php php returnphp php$configphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp stringphp orphp anphp associativephp andphp possiblyphp multidimensionalphp arrayphp from
php php php php php php*php aphp SimpleXMLElementphp.
php php php php php php*
php php php php php php*php php@paramphp php SimpleXMLElementphp php$xmlObjectphp Convertphp aphp SimpleXMLElementphp intophp anphp array
php php php php php php*php php@returnphp arrayphp|string
php php php php php php*php/
php php php php protectedphp functionphp php_toArrayphp(SimpleXMLElementphp php$xmlObjectphp)
php php php php php{
php php php php php php php php php$configphp php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$nsAttributesphp php=php php$xmlObjectphp-php>attributesphp(selfphp:php:XMLphp_NAMESPACEphp)php;

php php php php php php php php php/php/php Searchphp forphp parentphp nodephp values
php php php php php php php php ifphp php(countphp(php$xmlObjectphp-php>attributesphp(php)php)php php>php php0php)php php{
php php php php php php php php php php php php foreachphp php(php$xmlObjectphp-php>attributesphp(php)php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$keyphp php=php=php=php php'extendsphp'php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$valuephp php=php php(stringphp)php php$valuephp;

php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$keyphp,php php$configphp)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$configphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$configphp[php$keyphp]php php=php arrayphp(php$configphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$configphp[php$keyphp]php[php]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$configphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Searchphp forphp localphp php'constphp'php nodesphp andphp replacephp them
php php php php php php php php ifphp php(countphp(php$xmlObjectphp-php>childrenphp(selfphp:php:XMLphp_NAMESPACEphp)php)php php>php php0php)php php{
php php php php php php php php php php php php ifphp php(countphp(php$xmlObjectphp-php>childrenphp(php)php)php php>php php0php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php"Aphp nodephp withphp aphp php'constphp'php childnodephp mayphp notphp havephp anyphp otherphp childrenphp"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$domphp php php php php php php php php php php php php php php php php php=php domphp_importphp_simplexmlphp(php$xmlObjectphp)php;
php php php php php php php php php php php php php$namespaceChildNodesphp php=php arrayphp(php)php;

php php php php php php php php php php php php php/php/php Wephp havephp tophp storephp themphp inphp anphp arrayphp,php asphp replacingphp nodesphp will
php php php php php php php php php php php php php/php/php confusephp thephp DOMNodeListphp later
php php php php php php php php php php php php foreachphp php(php$domphp-php>childNodesphp asphp php$nodephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$nodephp instanceofphp DOMElementphp php&php&php php$nodephp-php>namespaceURIphp php=php=php=php selfphp:php:XMLphp_NAMESPACEphp)php php{
php php php php php php php php php php php php php php php php php php php php php$namespaceChildNodesphp[php]php php=php php$nodephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php foreachphp php(php$namespaceChildNodesphp asphp php$nodephp)php php{
php php php php php php php php php php php php php php php php switchphp php(php$nodephp-php>localNamephp)php php{
php php php php php php php php php php php php php php php php php php php php casephp php'constphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$nodephp-php>hasAttributeNSphp(selfphp:php:XMLphp_NAMESPACEphp,php php'namephp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php"Misssingphp php'namephp'php attributephp inphp php'constphp'php nodephp"php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php$constantNamephp php=php php$nodephp-php>getAttributeNSphp(selfphp:php:XMLphp_NAMESPACEphp,php php'namephp'php)php;

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!definedphp(php$constantNamephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php"Constantphp withphp namephp php'php$constantNamephp'php wasphp notphp definedphp"php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php$constantValuephp php=php constantphp(php$constantNamephp)php;

php php php php php php php php php php php php php php php php php php php php php php php php php$domphp-php>replaceChildphp(php$domphp-php>ownerDocumentphp-php>createTextNodephp(php$constantValuephp)php,php php$nodephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php"Unknownphp nodephp withphp namephp php'php$nodephp-php>localNamephp'php foundphp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php(stringphp)php simplexmlphp_importphp_domphp(php$domphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Searchphp forphp children
php php php php php php php php ifphp php(countphp(php$xmlObjectphp-php>childrenphp(php)php)php php>php php0php)php php{
php php php php php php php php php php php php foreachphp php(php$xmlObjectphp-php>childrenphp(php)php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(countphp(php$valuephp-php>childrenphp(php)php)php php>php php0php php|php|php countphp(php$valuephp-php>childrenphp(selfphp:php:XMLphp_NAMESPACEphp)php)php php>php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>php_toArrayphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(countphp(php$valuephp-php>attributesphp(php)php)php php>php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$attributesphp php=php php$valuephp-php>attributesphp(php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$attributesphp[php'valuephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php(stringphp)php php$attributesphp[php'valuephp'php]php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>php_toArrayphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php(stringphp)php php$valuephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$keyphp,php php$configphp)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$configphp[php$keyphp]php)php php|php|php php!arrayphp_keyphp_existsphp(php0php,php php$configphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$configphp[php$keyphp]php php=php arrayphp(php$configphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$configphp[php$keyphp]php[php]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$configphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php!issetphp(php$xmlObjectphp[php'extendsphp'php]php)php php&php&php php!issetphp(php$nsAttributesphp[php'extendsphp'php]php)php php&php&php php(countphp(php$configphp)php php=php=php=php php0php)php)php php{
php php php php php php php php php php php php php/php/php Objectphp hasphp nophp childrenphp norphp attributesphp andphp doesnphp'tphp usephp thephp extends
php php php php php php php php php php php php php/php/php attributephp:php itphp'sphp aphp string
php php php php php php php php php php php php php$configphp php=php php(stringphp)php php$xmlObjectphp;
php php php php php php php php php}

php php php php php php php php returnphp php$configphp;
php php php php php}
php}
