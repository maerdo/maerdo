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
php php*php CSRFphp formphp protection
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Hashphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Formphp_Elementphp_Hashphp extendsphp Zendphp_Formphp_Elementphp_Xhtml
php{
php php php php php/php*php*
php php php php php php*php Usephp formHiddenphp viewphp helperphp byphp default
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$helperphp php=php php'formHiddenphp'php;

php php php php php/php*php*
php php php php php php*php Actualphp hashphp usedphp.
php php php php php php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_hashphp;

php php php php php/php*php*
php php php php php php*php Saltphp forphp CSRFphp token
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_saltphp php=php php'saltphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Sessionphp_Namespace
php php php php php php*php/
php php php php protectedphp php$php_sessionphp;

php php php php php/php*php*
php php php php php php*php TTLphp forphp CSRFphp token
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_timeoutphp php=php php3php0php0php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Createsphp sessionphp namespacephp forphp CSRFphp tokenphp,php andphp addsphp validatorphp forphp CSRF
php php php php php php*php tokenphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp|Zendphp_Configphp php$spec
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$specphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$specphp,php php$optionsphp)php;

php php php php php php php php php$thisphp-php>setAllowEmptyphp(falsephp)
php php php php php php php php php php php php php php-php>setRequiredphp(truephp)
php php php php php php php php php php php php php php-php>initCsrfValidatorphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp sessionphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Sessionphp_Namespacephp php$session
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_Hash
php php php php php php*php/
php php php php publicphp functionphp setSessionphp(php$sessionphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_sessionphp php=php php$sessionphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp sessionphp object
php php php php php php*
php php php php php php*php Instantiatephp sessionphp objectphp ifphp nonephp currentlyphp exists
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Sessionphp_Namespace
php php php php php php*php/
php php php php publicphp functionphp getSessionphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_sessionphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Namespacephp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_sessionphp php=php newphp Zendphp_Sessionphp_Namespacephp(php$thisphp-php>getSessionNamephp(php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_sessionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp CSRFphp validator
php php php php php php*
php php php php php php*php Createsphp Sessionphp namespacephp,php andphp initializesphp CSRFphp tokenphp inphp sessionphp.
php php php php php php*php Additionallyphp,php addsphp validatorphp forphp validatingphp CSRFphp tokenphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_Hash
php php php php php php*php/
php php php php publicphp functionphp initCsrfValidatorphp(php)
php php php php php{
php php php php php php php php php$sessionphp php=php php$thisphp-php>getSessionphp(php)php;
php php php php php php php php ifphp php(issetphp(php$sessionphp-php>hashphp)php)php php{
php php php php php php php php php php php php php$rightHashphp php=php php$sessionphp-php>hashphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$rightHashphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>addValidatorphp(php'Identicalphp'php,php truephp,php arrayphp(php$rightHashphp)php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Saltphp forphp CSRFphp token
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$salt
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_Hash
php php php php php php*php/
php php php php publicphp functionphp setSaltphp(php$saltphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_saltphp php=php php(stringphp)php php$saltphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp saltphp forphp CSRFphp token
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getSaltphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_saltphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp CSRFphp token
php php php php php php*
php php php php php php*php Ifphp nophp CSRFphp tokenphp currentlyphp existsphp,php generatesphp onephp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getHashphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_hashphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_generateHashphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_hashphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp sessionphp namespacephp forphp CSRFphp token
php php php php php php*
php php php php php php*php Generatesphp aphp sessionphp namespacephp basedphp onphp saltphp,php elementphp namephp,php andphp classphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getSessionNamephp(php)
php php php php php{
php php php php php php php php returnphp php_php_CLASSphp_php_php php.php php'php_php'php php.php php$thisphp-php>getSaltphp(php)php php.php php'php_php'php php.php php$thisphp-php>getNamephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp timeoutphp forphp CSRFphp sessionphp token
php php php php php php*
php php php php php php*php php@paramphp php intphp php$ttl
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_Hash
php php php php php php*php/
php php php php publicphp functionphp setTimeoutphp(php$ttlphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_timeoutphp php=php php(intphp)php php$ttlphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp CSRFphp sessionphp tokenphp timeout
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getTimeoutphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_timeoutphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overridephp getLabelphp(php)php tophp alwaysphp bephp empty
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp functionphp getLabelphp(php)
php php php php php{
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp CSRFphp tokenphp inphp session
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp initCsrfTokenphp(php)
php php php php php{
php php php php php php php php php$sessionphp php=php php$thisphp-php>getSessionphp(php)php;
php php php php php php php php php$sessionphp-php>setExpirationHopsphp(php1php,php nullphp,php truephp)php;
php php php php php php php php php$sessionphp-php>setExpirationSecondsphp(php$thisphp-php>getTimeoutphp(php)php)php;
php php php php php php php php php$sessionphp-php>hashphp php=php php$thisphp-php>getHashphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp CSRFphp tokenphp inphp form
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Viewphp_Interfacephp php$view
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(Zendphp_Viewphp_Interfacephp php$viewphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>initCsrfTokenphp(php)php;
php php php php php php php php returnphp parentphp:php:renderphp(php$viewphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp CSRFphp token
php php php php php php*
php php php php php php*php Generatesphp CSRFphp tokenphp andphp storesphp bothphp inphp php{php@linkphp php$php_hashphp}php andphp element
php php php php php php*php valuephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_generateHashphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_hashphp php=php mdphp5php(
php php php php php php php php php php php php mtphp_randphp(php1php,php1php0php0php0php0php0php0php)
php php php php php php php php php php php php php.php php php$thisphp-php>getSaltphp(php)
php php php php php php php php php php php php php.php php php$thisphp-php>getNamephp(php)
php php php php php php php php php php php php php.php php mtphp_randphp(php1php,php1php0php0php0php0php0php0php)
php php php php php php php php php)php;
php php php php php php php php php$thisphp-php>setValuephp(php$thisphp-php>php_hashphp)php;
php php php php php}
php}
