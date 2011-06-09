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
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Rssphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Feedphp_Entryphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Entryphp/Abstractphp.phpphp'php;


php/php*php*
php php*php Concretephp classphp forphp workingphp withphp RSSphp itemsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Entryphp_Rssphp extendsphp Zendphp_Feedphp_Entryphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Rootphp XMLphp elementphp forphp RSSphp itemsphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_rootElementphp php=php php'itemphp'php;

php php php php php/php*php*
php php php php php php*php Overwritesphp parentphp:php:php_getphp methodphp tophp enablephp readphp access
php php php php php php*php tophp contentphp:encodedphp elementphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$varphp Thephp propertyphp tophp accessphp.
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$varphp)
php php php php php{
php php php php php php php php switchphp php(php$varphp)php php{
php php php php php php php php php php php php casephp php'contentphp'php:
php php php php php php php php php php php php php php php php php$prefixphp php=php php$thisphp-php>php_elementphp-php>lookupPrefixphp(php'httpphp:php/php/purlphp.orgphp/rssphp/php1php.php0php/modulesphp/contentphp/php'php)php;
php php php php php php php php php php php php php php php php returnphp parentphp:php:php_php_getphp(php"php$prefixphp:encodedphp"php)php;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp parentphp:php:php_php_getphp(php$varphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Overwritesphp parentphp:php:php_setphp methodphp tophp enablephp writephp access
php php php php php php*php tophp contentphp:encodedphp elementphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$varphp Thephp propertyphp tophp changephp.
php php php php php php*php php@paramphp php stringphp php$valphp Thephp propertyphp'sphp newphp valuephp.
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$varphp,php php$valuephp)
php php php php php{
php php php php php php php php switchphp php(php$varphp)php php{
php php php php php php php php php php php php casephp php'contentphp'php:
php php php php php php php php php php php php php php php php parentphp:php:php_php_setphp(php'contentphp:encodedphp'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php parentphp:php:php_php_setphp(php$varphp,php php$valuephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Overwritesphp parentphp:php:php_issetphp methodphp tophp enablephp access
php php php php php php*php tophp contentphp:encodedphp elementphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$var
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$varphp)
php php php php php{
php php php php php php php php switchphp php(php$varphp)php php{
php php php php php php php php php php php php casephp php'contentphp'php:
php php php php php php php php php php php php php php php php php/php/php donphp'tphp usephp otherphp callbackphp tophp preventphp invalidphp returnedphp value
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>contentphp(php)php php!php=php=php nullphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp parentphp:php:php_php_issetphp(php$varphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Overwritesphp parentphp:php:php_callphp methodphp tophp enablephp readphp access
php php php php php php*php tophp contentphp:encodedphp elementphp.
php php php php php php*php Pleasephp notephp thatphp methodphp-stylephp writephp accessphp isphp notphp currentlyphp supported
php php php php php php*php byphp parentphp methodphp,php consequentlyphp thisphp methodphp doesnphp'tphp asphp wellphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$varphp php php php Thephp elementphp tophp getphp thephp stringphp valuephp ofphp.
php php php php php php*php php@paramphp php mixedphp php php$unusedphp Thisphp parameterphp isphp notphp usedphp.
php php php php php php*php php@returnphp mixedphp Thephp nodephp'sphp valuephp,php nullphp,php orphp anphp arrayphp ofphp nodesphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$varphp,php php$unusedphp)
php php php php php{
php php php php php php php php switchphp php(php$varphp)php php{
php php php php php php php php php php php php casephp php'contentphp'php:
php php php php php php php php php php php php php php php php php$prefixphp php=php php$thisphp-php>php_elementphp-php>lookupPrefixphp(php'httpphp:php/php/purlphp.orgphp/rssphp/php1php.php0php/modulesphp/contentphp/php'php)php;
php php php php php php php php php php php php php php php php returnphp parentphp:php:php_php_callphp(php"php$prefixphp:encodedphp"php,php php$unusedphp)php;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp parentphp:php:php_php_callphp(php$varphp,php php$unusedphp)php;
php php php php php php php php php}
php php php php php}
php}
