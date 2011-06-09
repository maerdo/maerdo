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
php php*php php@packagephp php php Zendphp_Uri
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php Uriphp.phpphp php2php3php3php7php6php php2php0php1php0php-php1php1php-php1php8php php2php1php:php1php9php:php2php4Zphp bittarmanphp php$
php php*php/

php/php*php*
php php*php Abstractphp classphp forphp allphp Zendphp_Uriphp handlers
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Uri
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Uri
php{
php php php php php/php*php*
php php php php php php*php Schemephp ofphp thisphp URIphp php(httpphp,php ftpphp,php etcphp.php)
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_schemephp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Globalphp configurationphp array
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php staticphp protectedphp php$php_configphp php=php arrayphp(
php php php php php php php php php'allowphp_unwisephp'php php=php>php false
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Returnphp aphp stringphp representationphp ofphp thisphp URIphp.
php php php php php php*
php php php php php php*php php@seephp php php php getUriphp(php)
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>getUriphp(php)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php triggerphp_errorphp(php$ephp-php>getMessagephp(php)php,php Ephp_USERphp_WARNINGphp)php;
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Conveniencephp functionphp,php checksphp thatphp aphp php$uriphp stringphp isphp wellphp-formed
php php php php php php*php byphp validatingphp itphp butphp notphp returningphp anphp objectphp.php php Returnsphp TRUEphp if
php php php php php php*php php$uriphp isphp aphp wellphp-formedphp URIphp,php orphp FALSEphp otherwisephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$uriphp Thephp URIphp tophp check
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp checkphp(php$uriphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$uriphp php=php selfphp:php:factoryphp(php$uriphp)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$uriphp-php>validphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp Zendphp_Uriphp objectphp forphp aphp URIphp.php php Ifphp buildingphp aphp newphp URIphp,php thenphp php$uriphp shouldphp contain
php php php php php php*php onlyphp thephp schemephp php(httpphp,php ftpphp,php etcphp)php.php php Otherwisephp,php supplyphp php$uriphp withphp thephp completephp URIphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$uriphp php php php php php php Thephp URIphp formphp whichphp aphp Zendphp_Uriphp instancephp isphp created
php php php php php php*php php@paramphp php stringphp php$classNamephp Thephp namephp ofphp thephp classphp tophp usephp inphp orderphp tophp manipulatephp URI
php php php php php php*php php@throwsphp Zendphp_Uriphp_Exceptionphp Whenphp anphp emptyphp stringphp wasphp suppliedphp forphp thephp scheme
php php php php php php*php php@throwsphp Zendphp_Uriphp_Exceptionphp Whenphp anphp illegalphp schemephp isphp supplied
php php php php php php*php php@throwsphp Zendphp_Uriphp_Exceptionphp Whenphp thephp schemephp isphp notphp supported
php php php php php php*php php@throwsphp Zendphp_Uriphp_Exceptionphp Whenphp php$classNamephp doesnphp'tphp existphp orphp doesnphp'tphp implementsphp Zendphp_Uri
php php php php php php*php php@returnphp Zendphp_Uri
php php php php php php*php php@linkphp php php httpphp:php/php/wwwphp.faqsphp.orgphp/rfcsphp/rfcphp2php3php9php6php.html
php php php php php php*php/
php php php php publicphp staticphp functionphp factoryphp(php$uriphp php=php php'httpphp'php,php php$classNamephp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Separatephp thephp schemephp fromphp thephp schemephp-specificphp parts
php php php php php php php php php$uriphp php php php php php php php php php php php php=php explodephp(php'php:php'php,php php$uriphp,php php2php)php;
php php php php php php php php php$schemephp php php php php php php php php php=php strtolowerphp(php$uriphp[php0php]php)php;
php php php php php php php php php$schemeSpecificphp php=php issetphp(php$uriphp[php1php]php)php php=php=php=php truephp php?php php$uriphp[php1php]php php:php php'php'php;

php php php php php php php php ifphp php(strlenphp(php$schemephp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Uriphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Uriphp_Exceptionphp(php'Anphp emptyphp stringphp wasphp suppliedphp forphp thephp schemephp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Securityphp checkphp:php php$schemephp isphp usedphp tophp loadphp aphp classphp filephp,php sophp onlyphp alphanumericsphp arephp allowedphp.
php php php php php php php php ifphp php(ctypephp_alnumphp(php$schemephp)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Uriphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Uriphp_Exceptionphp(php'Illegalphp schemephp suppliedphp,php onlyphp alphanumericphp charactersphp arephp permittedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$classNamephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Createphp aphp newphp Zendphp_Uriphp objectphp forphp thephp php$uriphp.php Ifphp aphp subclassphp ofphp Zendphp_Uriphp existsphp forphp the
php php php php php php php php php php php php php php*php schemephp,php returnphp anphp instancephp ofphp thatphp classphp.php Otherwisephp,php aphp Zendphp_Uriphp_Exceptionphp isphp thrownphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php switchphp php(php$schemephp)php php{
php php php php php php php php php php php php php php php php casephp php'httpphp'php:
php php php php php php php php php php php php php php php php php php php php php/php/php Breakphp intentionallyphp omitted
php php php php php php php php php php php php php php php php casephp php'httpsphp'php:
php php php php php php php php php php php php php php php php php php php php php$classNamephp php=php php'Zendphp_Uriphp_Httpphp'php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'mailtophp'php:
php php php php php php php php php php php php php php php php php php php php php/php/php TODO
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Uriphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Uriphp_Exceptionphp(php"Schemephp php\php"php$schemephp\php"php isphp notphp supportedphp"php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classNamephp)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Uriphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Uriphp_Exceptionphp(php"php\php"php$classNamephp\php"php notphp foundphp"php)php;
php php php php php php php php php}

php php php php php php php php php$schemeHandlerphp php=php newphp php$classNamephp(php$schemephp,php php$schemeSpecificphp)php;

php php php php php php php php ifphp php(php!php php$schemeHandlerphp instanceofphp Zendphp_Uriphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Uriphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Uriphp_Exceptionphp(php"php\php"php$classNamephp\php"php isphp notphp anphp instancephp ofphp Zendphp_Uriphp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$schemeHandlerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp URIphp'sphp scheme
php php php php php php*
php php php php php php*php php@returnphp stringphp|falsephp Schemephp orphp falsephp ifphp nophp schemephp isphp setphp.
php php php php php php*php/
php php php php publicphp functionphp getSchemephp(php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_schemephp)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_schemephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp globalphp configurationphp options
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Configphp|arrayphp php$config
php php php php php php*php/
php php php php staticphp publicphp functionphp setConfigphp(php$configphp)
php php php php php{
php php php php php php php php ifphp php(php$configphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$configphp php=php php$configphp-php>toArrayphp(php)php;
php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$configphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Uriphp_Exceptionphp(php"Configphp mustphp bephp anphp arrayphp orphp anphp instancephp ofphp Zendphp_Configphp.php"php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$configphp asphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php selfphp:php:php$php_configphp[php$kphp]php php=php php$vphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Zendphp_Uriphp andphp itsphp subclassesphp cannotphp bephp instantiatedphp directlyphp.
php php php php php php*php Usephp Zendphp_Uriphp:php:factoryphp(php)php tophp returnphp aphp newphp Zendphp_Uriphp objectphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$schemephp php php php php php php php php Thephp schemephp ofphp thephp URI
php php php php php php*php php@paramphp stringphp php$schemeSpecificphp Thephp schemephp-specificphp partphp ofphp thephp URI
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_php_constructphp(php$schemephp,php php$schemeSpecificphp php=php php'php'php)php;

php php php php php/php*php*
php php php php php php*php Returnphp aphp stringphp representationphp ofphp thisphp URIphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php abstractphp publicphp functionphp getUriphp(php)php;

php php php php php/php*php*
php php php php php php*php Returnsphp TRUEphp ifphp thisphp URIphp isphp validphp,php orphp FALSEphp otherwisephp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php abstractphp publicphp functionphp validphp(php)php;
php}
