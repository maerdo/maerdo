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
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Mailphp.phpphp php2php3php4php8php6php php2php0php1php0php-php1php2php-php1php0php php0php4php:php0php5php:php3php0Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php php*php/
requirephp_oncephp php'Zendphp/Applicationphp/Resourcephp/ResourceAbstractphp.phpphp'php;

php/php*php*
php php*php Resourcephp forphp settingphp upphp Mailphp Transportphp andphp defaultphp Fromphp php&php ReplyTophp addresses
php php*
php php*php php@usesphp php php php php php php Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Applicationphp_Resourcephp_Mailphp extendsphp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php{

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Mailphp_Transportphp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_transportphp;

php php php php publicphp functionphp initphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>getMailphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Mailphp_Transportphp_Abstractphp|null
php php php php php php*php/
php php php php publicphp functionphp getMailphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_transportphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$thisphp-php>getOptionsphp(php)php;
php php php php php php php php php php php php foreachphp(php$optionsphp asphp php$keyphp php=php>php php$optionphp)php php{
php php php php php php php php php php php php php php php php php$optionsphp[strtolowerphp(php$keyphp)php]php php=php php$optionphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;

php php php php php php php php php php php php ifphp(issetphp(php$optionsphp[php'transportphp'php]php)php php&php&
php php php php php php php php php php php php php php php php!isphp_numericphp(php$optionsphp[php'transportphp'php]php)php)
php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_transportphp php=php php$thisphp-php>php_setupTransportphp(php$optionsphp[php'transportphp'php]php)php;
php php php php php php php php php php php php php php php php ifphp(php!issetphp(php$optionsphp[php'transportphp'php]php[php'registerphp'php]php)php php|php|
php php php php php php php php php php php php php php php php php php php php$optionsphp[php'transportphp'php]php[php'registerphp'php]php php=php=php php'php1php'php php|php|
php php php php php php php php php php php php php php php php php php php php(issetphp(php$optionsphp[php'transportphp'php]php[php'registerphp'php]php)php php&php&
php php php php php php php php php php php php php php php php php php php php php php php php php!isphp_numericphp(php$optionsphp[php'transportphp'php]php[php'registerphp'php]php)php php&php&
php php php php php php php php php php php php php php php php php php php php php php php php php(boolphp)php php$optionsphp[php'transportphp'php]php[php'registerphp'php]php php=php=php truephp)php)
php php php php php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php php php php php Zendphp_Mailphp:php:setDefaultTransportphp(php$thisphp-php>php_transportphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_setDefaultsphp(php'fromphp'php)php;
php php php php php php php php php php php php php$thisphp-php>php_setDefaultsphp(php'replyTophp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_transportphp;
php php php php php}

php php php php protectedphp functionphp php_setDefaultsphp(php$typephp)php php{
php php php php php php php php php$keyphp php=php strtolowerphp(php'defaultphp'php php.php php$typephp)php;
php php php php php php php php php$optionsphp php=php php$thisphp-php>getOptionsphp(php)php;

php php php php php php php php ifphp(issetphp(php$optionsphp[php$keyphp]php[php'emailphp'php]php)php php&php&
php php php php php php php php php php php php!isphp_numericphp(php$optionsphp[php$keyphp]php[php'emailphp'php]php)php)
php php php php php php php php php{
php php php php php php php php php php php php php$methodphp php=php arrayphp(php'Zendphp_Mailphp'php,php php'setDefaultphp'php php.php ucfirstphp(php$typephp)php)php;
php php php php php php php php php php php php ifphp(issetphp(php$optionsphp[php$keyphp]php[php'namephp'php]php)php php&php&
php php php php php php php php php php php php php php php php!isphp_numericphp(php$optionsphp[php$keyphp]php[php'namephp'php]php)php)
php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php callphp_userphp_funcphp(php$methodphp,php php$optionsphp[php$keyphp]php[php'emailphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$optionsphp[php$keyphp]php[php'namephp'php]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php callphp_userphp_funcphp(php$methodphp,php php$optionsphp[php$keyphp]php[php'emailphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php protectedphp functionphp php_setupTransportphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp(php!issetphp(php$optionsphp[php'typephp'php]php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'typephp'php]php php=php php'sendmailphp'php;
php php php php php php php php php}
php php php php php php php php 
php php php php php php php php php$transportNamephp php=php php$optionsphp[php'typephp'php]php;
php php php php php php php php ifphp(php!Zendphp_Loaderphp_Autoloaderphp:php:autoloadphp(php$transportNamephp)php)
php php php php php php php php php{
php php php php php php php php php php php php php$transportNamephp php=php ucfirstphp(strtolowerphp(php$transportNamephp)php)php;

php php php php php php php php php php php php ifphp(php!Zendphp_Loaderphp_Autoloaderphp:php:autoloadphp(php$transportNamephp)php)
php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php php$transportNamephp php=php php'Zendphp_Mailphp_Transportphp_php'php php.php php$transportNamephp;
php php php php php php php php php php php php php php php php ifphp(php!Zendphp_Loaderphp_Autoloaderphp:php:autoloadphp(php$transportNamephp)php)php php{
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Resourcephp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php php php php php"Specifiedphp Mailphp Transportphp php'php{php$transportNamephp}php'php"
php php php php php php php php php php php php php php php php php php php php php php php php php.php php'couldphp notphp bephp foundphp'
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php unsetphp(php$optionsphp[php'typephp'php]php)php;

php php php php php php php php switchphp(php$transportNamephp)php php{
php php php php php php php php php php php php casephp php'Zendphp_Mailphp_Transportphp_Smtpphp'php:
php php php php php php php php php php php php php php php php ifphp(php!issetphp(php$optionsphp[php'hostphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Resourcephp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'Aphp hostphp isphp necessaryphp forphp smtpphp transportphp,php'
php php php php php php php php php php php php php php php php php php php php php php php php php.php'php butphp nonephp wasphp givenphp'php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$transportphp php=php newphp php$transportNamephp(php$optionsphp[php'hostphp'php]php,php php$optionsphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'Zendphp_Mailphp_Transportphp_Sendmailphp'php:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$transportphp php=php newphp php$transportNamephp(php$optionsphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php returnphp php$transportphp;
php php php php php}
php}
