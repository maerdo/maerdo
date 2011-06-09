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
php php*php php@packagephp php php php Zendphp_Markup
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php TokenListphp.phpphp php2php0php2php7php7php php2php0php1php0php-php0php1php-php1php4php php1php4php:php1php7php:php1php2Zphp kokxphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Markupphp_Token
php php*php/
requirephp_oncephp php'Zendphp/Markupphp/Tokenphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Markup
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Markupphp_TokenListphp implementsphp RecursiveIterator
php{

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp tokens
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_tokensphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp thephp currentphp token
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Markupphp_Token
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php returnphp currentphp(php$thisphp-php>php_tokensphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp childrenphp ofphp thephp currentphp token
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Markupphp_TokenList
php php php php php php*php/
php php php php publicphp functionphp getChildrenphp(php)
php php php php php{
php php php php php php php php returnphp currentphp(php$thisphp-php>php_tokensphp)php-php>getChildrenphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp newphp childphp token
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Markupphp_Tokenphp php$child
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp addChildphp(Zendphp_Markupphp_Tokenphp php$childphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_tokensphp[php]php php=php php$childphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp thephp currentphp tokenphp hasphp children
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasChildrenphp(php)
php php php php php{
php php php php php php php php returnphp currentphp(php$thisphp-php>php_tokensphp)php-php>hasChildrenphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp keyphp ofphp thephp currentphp token
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp keyphp(php$thisphp-php>php_tokensphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Gophp tophp thephp nextphp token
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Markupphp_Token
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php returnphp nextphp(php$thisphp-php>php_tokensphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rewindphp thephp iterator
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php resetphp(php$thisphp-php>php_tokensphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp thephp elementphp isphp valid
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>currentphp(php)php php!php=php=php falsephp;
php php php php php}
php}
