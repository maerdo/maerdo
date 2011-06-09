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
php php*php php@packagephp php php php Zendphp_Auth
php php*php php@subpackagephp Zendphp_Authphp_Adapterphp_Http
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Filephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Httpphp/Resolverphp/Interfacephp.phpphp'php;


php/php*php*
php php*php HTTPphp Authenticationphp Filephp Resolver
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Auth
php php*php php@subpackagephp Zendphp_Authphp_Adapterphp_Http
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Filephp implementsphp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Pathphp tophp credentialsphp file
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_filephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$pathphp Completephp filenamephp wherephp thephp credentialsphp arephp stored
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$pathphp php=php php'php'php)
php php php php php{
php php php php php php php php ifphp php(php!emptyphp(php$pathphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setFilephp(php$pathphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp pathphp tophp thephp credentialsphp file
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@throwsphp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Exception
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Filephp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setFilephp(php$pathphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$pathphp)php php|php|php php!isphp_readablephp(php$pathphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Httpphp/Resolverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Exceptionphp(php'Pathphp notphp readablephp:php php'php php.php php$pathphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_filephp php=php php$pathphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp pathphp tophp thephp credentialsphp file
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getFilephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_filephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resolvephp credentials
php php php php php php*
php php php php php php*php Onlyphp thephp firstphp matchingphp usernamephp/realmphp combinationphp inphp thephp filephp is
php php php php php php*php returnedphp.php Ifphp thephp filephp containsphp credentialsphp forphp Digestphp authenticationphp,
php php php php php php*php thephp returnedphp stringphp isphp thephp passwordphp hashphp,php orphp hphp(aphp1php)php fromphp RFCphp php2php6php1php7php.php The
php php php php php php*php returnedphp stringphp isphp thephp plainphp-textphp passwordphp forphp Basicphp authenticationphp.
php php php php php php*
php php php php php php*php Thephp expectedphp formatphp ofphp thephp filephp isphp:
php php php php php php*php php php usernamephp:realmphp:sharedSecret
php php php php php php*
php php php php php php*php Thatphp isphp,php eachphp linephp consistsphp ofphp thephp userphp'sphp usernamephp,php thephp applicable
php php php php php php*php authenticationphp realmphp,php andphp thephp passwordphp orphp hashphp,php eachphp delimitedphp by
php php php php php php*php colonsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$usernamephp Username
php php php php php php*php php@paramphp php stringphp php$realmphp php php php Authenticationphp Realm
php php php php php php*php php@throwsphp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Exception
php php php php php php*php php@returnphp stringphp|falsephp Userphp'sphp sharedphp secretphp,php ifphp thephp userphp isphp foundphp inphp the
php php php php php php*php php php php php php php php php realmphp,php falsephp otherwisephp.
php php php php php php*php/
php php php php publicphp functionphp resolvephp(php$usernamephp,php php$realmphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$usernamephp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Httpphp/Resolverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Exceptionphp(php'Usernamephp isphp requiredphp'php)php;
php php php php php php php php php}php elsephp ifphp php(php!ctypephp_printphp(php$usernamephp)php php|php|php strposphp(php$usernamephp,php php'php:php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Httpphp/Resolverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Exceptionphp(php'Usernamephp mustphp consistphp onlyphp ofphp printablephp charactersphp,php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'excludingphp thephp colonphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$realmphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Httpphp/Resolverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Exceptionphp(php'Realmphp isphp requiredphp'php)php;
php php php php php php php php php}php elsephp ifphp php(php!ctypephp_printphp(php$realmphp)php php|php|php strposphp(php$realmphp,php php'php:php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Httpphp/Resolverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Exceptionphp(php'Realmphp mustphp consistphp onlyphp ofphp printablephp charactersphp,php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'excludingphp thephp colonphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Openphp filephp,php readphp throughphp lookingphp forphp matchingphp credentials
php php php php php php php php php$fpphp php=php php@fopenphp(php$thisphp-php>php_filephp,php php'rphp'php)php;
php php php php php php php php ifphp php(php!php$fpphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Httpphp/Resolverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Httpphp_Resolverphp_Exceptionphp(php'Unablephp tophp openphp passwordphp filephp:php php'php php.php php$thisphp-php>php_filephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Nophp realphp validationphp isphp donephp onphp thephp contentsphp ofphp thephp passwordphp filephp.php The
php php php php php php php php php/php/php assumptionphp isphp thatphp wephp trustphp thephp administratorsphp tophp keepphp itphp securephp.
php php php php php php php php whilephp php(php(php$linephp php=php fgetcsvphp(php$fpphp,php php5php1php2php,php php'php:php'php)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php ifphp php(php$linephp[php0php]php php=php=php php$usernamephp php&php&php php$linephp[php1php]php php=php=php php$realmphp)php php{
php php php php php php php php php php php php php php php php php$passwordphp php=php php$linephp[php2php]php;
php php php php php php php php php php php php php php php php fclosephp(php$fpphp)php;
php php php php php php php php php php php php php php php php returnphp php$passwordphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php fclosephp(php$fpphp)php;
php php php php php php php php returnphp falsephp;
php php php php php}
php}
