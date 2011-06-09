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
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp UserAgent
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php Interfacephp definingphp aphp browserphp devicephp typephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp UserAgent
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
interfacephp Zendphp_Httpphp_UserAgentphp_Devicephp extendsphp Serializable
php{
php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Allowsphp injectingphp userphp agentphp,php serverphp arrayphp,php andphp/orphp configphp arrayphp.php Ifphp an
php php php php php php*php arrayphp isphp providedphp forphp thephp firstphp argumentphp,php thephp assumptionphp shouldphp bephp that
php php php php php php*php thephp devicephp objectphp isphp beingphp seededphp withphp cachedphp valuesphp fromphp serializationphp.
php php php php php php*
php php php php php php*php php@paramphp php nullphp|stringphp|arrayphp php$userAgent
php php php php php php*php php@paramphp php arrayphp php$server
php php php php php php*php php@paramphp php arrayphp php$config
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$userAgentphp php=php nullphp,php arrayphp php$serverphp php=php arrayphp(php)php,php arrayphp php$configphp php=php arrayphp(php)php)php;

php php php php php/php*php*
php php php php php php*php Attemptphp tophp matchphp thephp userphp agent
php php php php php php*
php php php php php php*php Returnphp eitherphp anphp arrayphp ofphp browserphp signaturephp stringsphp,php orphp aphp booleanphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$userAgent
php php php php php php*php php@paramphp php arrayphp php$server
php php php php php php*php php@returnphp boolphp|array
php php php php php php*php/
php php php php publicphp staticphp functionphp matchphp(php$userAgentphp,php php$serverphp)php;

php php php php php/php*php*
php php php php php php*php Getphp allphp browserphp/devicephp features
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAllFeaturesphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp allphp ofphp thephp browserphp/devicephp'sphp featuresphp'php groups
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp getAllGroupsphp(php)php;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp thephp devicephp hasphp aphp givenphp feature
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$feature
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasFeaturephp(php$featurephp)php;

php php php php php/php*php*
php php php php php php*php Getphp thephp valuephp ofphp aphp specificphp devicephp feature
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$feature
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getFeaturephp(php$featurephp)php;

php php php php php/php*php*
php php php php php php*php Getphp thephp browserphp type
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getBrowserphp(php)php;

php php php php php/php*php*
php php php php php php*php Retrurnphp thephp browserphp version
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getBrowserVersionphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp anphp arrayphp ofphp featuresphp associatedphp withphp aphp group
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$group
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getGroupphp(php$groupphp)php;

php php php php php/php*php*
php php php php php php*php Retrievephp imagephp formatphp support
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getImageFormatSupportphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp imagephp types
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getImagesphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp thephp maximumphp imagephp heightphp supportedphp byphp thisphp device
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getMaxImageHeightphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp thephp maximumphp imagephp widthphp supportedphp byphp thisphp device
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getMaxImageWidthphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp thephp physicalphp screenphp heightphp ofphp thisphp device
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getPhysicalScreenHeightphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp thephp physicalphp screenphp widthphp ofphp thisphp device
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getPhysicalScreenWidthphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp thephp preferredphp markupphp type
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPreferredMarkupphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp thephp userphp agentphp string
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getUserAgentphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp supportedphp Xphp/HTMLphp version
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getXhtmlSupportLevelphp(php)php;

php php php php php/php*php*
php php php php php php*php Doesphp thephp devicephp supportphp Flashphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasFlashSupportphp(php)php;

php php php php php/php*php*
php php php php php php*php Doesphp thephp devicephp supportphp PDFphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasPdfSupportphp(php)php;

php php php php php/php*php*
php php php php php php*php Doesphp thephp devicephp havephp aphp phonephp numberphp associatedphp withphp itphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasPhoneNumberphp(php)php;

php php php php php/php*php*
php php php php php php*php Doesphp thephp devicephp supportphp HTTPSphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp httpsSupportphp(php)php;
php}
