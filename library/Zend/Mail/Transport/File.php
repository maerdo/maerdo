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
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Transport
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Mailphp_Transportphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Transportphp/Abstractphp.phpphp'php;


php/php*php*
php php*php Filephp transport
php php*
php php*php Classphp forphp savingphp outgoingphp emailsphp inphp filesystem
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Transport
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Mailphp_Transportphp_Filephp extendsphp Zendphp_Mailphp_Transportphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Targetphp directoryphp forphp savingphp sentphp emailphp messages
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_pathphp;

php php php php php/php*php*
php php php php php php*php Callbackphp functionphp generatingphp aphp filephp name
php php php php php php*
php php php php php php*php php@varphp stringphp|array
php php php php php php*php/
php php php php protectedphp php$php_callbackphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$optionsphp OPTIONALphp php(Defaultphp:php nullphp)
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Makingphp surephp wephp havephp somephp defaultsphp tophp workphp with
php php php php php php php php ifphp php(php!issetphp(php$optionsphp[php'pathphp'php]php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'pathphp'php]php php=php sysphp_getphp_tempphp_dirphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$optionsphp[php'callbackphp'php]php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'callbackphp'php]php php=php arrayphp(php$thisphp,php php'defaultCallbackphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'pathphp'php]php)php&php&php isphp_dirphp(php$optionsphp[php'pathphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_pathphp php=php php$optionsphp[php'pathphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'callbackphp'php]php)php php&php&php isphp_callablephp(php$optionsphp[php'callbackphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_callbackphp php=php php$optionsphp[php'callbackphp'php]php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Savesphp ephp-mailphp messagephp tophp aphp file
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Mailphp_Transportphp_Exceptionphp onphp notphp writablephp targetphp directory
php php php php php php*php php@throwsphp Zendphp_Mailphp_Transportphp_Exceptionphp onphp filephp_putphp_contentsphp(php)php failure
php php php php php php*php/
php php php php protectedphp functionphp php_sendMailphp(php)
php php php php php{
php php php php php php php php php$filephp php=php php$thisphp-php>php_pathphp php.php DIRECTORYphp_SEPARATORphp php.php callphp_userphp_funcphp(php$thisphp-php>php_callbackphp,php php$thisphp)php;

php php php php php php php php ifphp php(php!isphp_writablephp(dirnamephp(php$filephp)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Transportphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Transportphp_Exceptionphp(sprintfphp(
php php php php php php php php php php php php php php php php php'Targetphp directoryphp php"php%sphp"php doesphp notphp existphp orphp isphp notphp writablephp'php,
php php php php php php php php php php php php php php php php dirnamephp(php$filephp)
php php php php php php php php php php php php php)php)php;
php php php php php php php php php}

php php php php php php php php php$emailphp php=php php$thisphp-php>headerphp php.php php$thisphp-php>EOLphp php.php php$thisphp-php>bodyphp;

php php php php php php php php ifphp php(php!filephp_putphp_contentsphp(php$filephp,php php$emailphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Transportphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Transportphp_Exceptionphp(php'Unablephp tophp sendphp mailphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Defaultphp callbackphp forphp generatingphp filenames
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Mailphp_Transportphp_Filephp Filephp transportphp instance
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp defaultCallbackphp(php$transportphp)
php php php php php{
php php php php php php php php returnphp php'ZendMailphp_php'php php.php php$php_SERVERphp[php'REQUESTphp_TIMEphp'php]php php.php php'php_php'php php.php mtphp_randphp(php)php php.php php'php.tmpphp'php;
php php php php php}
php}
