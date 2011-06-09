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
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@subpackagephp Sitemap
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Priorityphp.phpphp php2php2php6php6php8php php2php0php1php0php-php0php7php-php2php5php php1php4php:php5php0php:php4php6Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Validatesphp whetherphp aphp givenphp valuephp isphp validphp asphp aphp sitemapphp php<priorityphp>php value
php php*
php php*php php@linkphp php php php php php php httpphp:php/php/wwwphp.sitemapsphp.orgphp/protocolphp.phpphp Sitemapsphp XMLphp format
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@subpackagephp Sitemap
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Sitemapphp_Priorityphp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Validationphp keyphp forphp notphp valid
php php php php php php*
php php php php php php*php/
php php php php constphp NOTphp_VALIDphp php=php php'sitemapPriorityNotValidphp'php;
php php php php constphp INVALIDphp php php php=php php'sitemapPriorityInvalidphp'php;

php php php php php/php*php*
php php php php php php*php Validationphp failurephp messagephp templatephp definitions
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:NOTphp_VALIDphp php=php>php php"php'php%valuephp%php'php isphp nophp validphp sitemapphp priorityphp"php,
php php php php php php php php selfphp:php:INVALIDphp php php php=php>php php"Invalidphp typephp givenphp.php Numericphp stringphp,php integerphp orphp floatphp expectedphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Validatesphp ifphp aphp stringphp isphp validphp asphp aphp sitemapphp priority
php php php php php php*
php php php php php php*php php@linkphp httpphp:php/php/wwwphp.sitemapsphp.orgphp/protocolphp.phpphp#prioritydefphp php<priorityphp>
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$valuephp php valuephp tophp validate
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_numericphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_setValuephp(php$valuephp)php;
php php php php php php php php php$valuephp php=php php(floatphp)php php$valuephp;
php php php php php php php php ifphp php(php$valuephp <php php0php php|php|php php$valuephp php>php php1php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:NOTphp_VALIDphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}
php}
