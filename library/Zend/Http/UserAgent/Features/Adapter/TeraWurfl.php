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
php php*php Zendphp_Httpphp_UserAgentphp_Featuresphp_Adapterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/UserAgentphp/Featuresphp/Adapterphp.phpphp'php;

php/php*php*
php php*php Featuresphp adapterphp buildphp withphp thephp Teraphp Wurflphp Api
php php*php Seephp installationphp instructionphp herephp php:php httpphp:php/php/wwwphp.teraphp-wurflphp.comphp/wikiphp/indexphp.phpphp/Installation
php php*php Downloadphp php:php httpphp:php/php/wwwphp.teraphp-wurflphp.comphp/wikiphp/indexphp.phpphp/Downloads
php php*
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp UserAgent
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Httpphp_UserAgentphp_Featuresphp_Adapterphp_TeraWurflphp implementsphp Zendphp_Httpphp_UserAgentphp_Featuresphp_Adapter
php{
php php php php php/php*php*
php php php php php php*php Getphp featuresphp fromphp request
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$requestphp php$php_SERVERphp variable
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp staticphp functionphp getFromRequestphp(php$requestphp,php arrayphp php$configphp)
php php php php php{
php php php php php php php php ifphp php(php!classphp_existsphp(php'TeraWurflphp'php)php)php php{
php php php php php php php php php php php php php/php/php Ifphp TeraWurflphp classphp notphp foundphp,php seephp ifphp wephp canphp loadphp itphp from
php php php php php php php php php php php php php/php/php configuration
php php php php php php php php php php php php php/php/
php php php php php php php php php php php php ifphp php(php!issetphp(php$configphp[php'terawurflphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php/php/php Nophp configuration
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/UserAgentphp/Featuresphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_UserAgentphp_Featuresphp_Exceptionphp(php'php"TeraWurflphp"php configurationphp isphp notphp definedphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$configphp php=php php$configphp[php'terawurflphp'php]php;

php php php php php php php php php php php php php ifphp php(emptyphp(php$configphp[php'terawurflphp_libphp_dirphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php/php/php Nophp libphp_dirphp given
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/UserAgentphp/Featuresphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_UserAgentphp_Featuresphp_Exceptionphp(php'Thephp php"terawurflphp_libphp_dirphp"php parameterphp isphp notphp definedphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Includephp thephp Teraphp-WURFLphp file
php php php php php php php php php php php php requirephp_oncephp php(php$configphp[php'terawurflphp_libphp_dirphp'php]php php.php php'php/TeraWurflphp.phpphp'php)php;
php php php php php php php php php}


php php php php php php php php php/php/php instantiatephp thephp Teraphp-WURFLphp object
php php php php php php php php php$wurflObjphp php=php newphp TeraWurflphp(php)php;

php php php php php php php php php/php/php Getphp thephp capabilitiesphp ofphp thephp currentphp clientphp.
php php php php php php php php php$matchedphp php=php php$wurflObjphp-php>getDeviceCapabilitiesFromRequestphp(arrayphp_changephp_keyphp_casephp(php$requestphp,php CASEphp_UPPERphp)php)php;

php php php php php php php php returnphp selfphp:php:getAllCapabilitiesphp(php$wurflObjphp)php;
php php php php php}

php php php php php/php*php*php*
php php php php php php*php Buildsphp anphp arrayphp withphp allphp capabilities
php php php php php php*
php php php php php php*php php@paramphp TeraWurflphp php$wurflObjphp TeraWurflphp object
php php php php php php*php/
php php php php publicphp staticphp functionphp getAllCapabilitiesphp(TeraWurflphp php$wurflObjphp)
php php php php php{

php php php php php php php php foreachphp php(php$wurflObjphp-php>capabilitiesphp asphp php$groupphp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$groupphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php whilephp php(listphp php(php$keyphp,php php$valuephp)php php=php eachphp(php$groupphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_boolphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php tophp havephp thephp samephp typephp thanphp thephp officialphp WURFLphp API
php php php php php php php php php php php php php php php php php php php php php$featuresphp[php$keyphp]php php=php php(php$valuephp php?php php'truephp'php php:php php'falsephp'php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$featuresphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$featuresphp;
php php php php php}
php}
