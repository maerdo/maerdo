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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Formphp php*php/
requirephp_oncephp php'Zendphp/Formphp.phpphp'php;

php/php*php*
php php*php Zendphp_Formphp_SubForm
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php SubFormphp.phpphp php2php2php3php2php8php php2php0php1php0php-php0php5php-php3php0php php1php5php:php0php9php:php0php6Zphp bittarmanphp php$
php php*php/
classphp Zendphp_Formphp_SubFormphp extendsphp Zendphp_Form
php{
php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp formphp elementsphp arephp membersphp ofphp anphp array
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_isArrayphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Loadphp thephp defaultphp decorators
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Formphp_SubForm
php php php php php php*php/
php php php php publicphp functionphp loadDefaultDecoratorsphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>loadDefaultDecoratorsIsDisabledphp(php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$decoratorsphp php=php php$thisphp-php>getDecoratorsphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$decoratorsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>addDecoratorphp(php'FormElementsphp'php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'HtmlTagphp'php,php arrayphp(php'tagphp'php php=php>php php'dlphp'php)php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'Fieldsetphp'php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'DtDdWrapperphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
